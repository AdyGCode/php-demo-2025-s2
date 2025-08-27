


## Add Vite, Tailwindcss & FontAwesome Free

```shell
cd PROJECT_FOLDER
```

## Update .gitignore

We need to ignore composer based files (vendor folder) ready for later.

Open your /.gitignore file and at the end add:

```text
### Composer template
composer.phar
/vendor/

# Comment the line below if you are going to ignore the composer lock file
!/composer.lock

```


## Required Node Modules

Add following node modules:

- vite
- tailwindcss
- @tailwindcss/forms
- @tailwindcss/vite
- concurrently - this allows the CLI to execute multiple commands simultaneously)
- vite-plugin-php - allows vite to scan the PHP files for tailwind css

```shell
touch src/style.css
npm i --save-dev vite 
npm i @fortawesome/fontawesome-free
npm i --save-dev tailwindcss 
npm i --save-dev @tailwindcss/forms
npm i --save-dev @tailwindcss/vite 
npm i --save-dev vite-plugin-php
npm i --save-dev concurrently
```

Create and edit the src/style.css file and add:
```css
@import "tailwindcss";
@import "@fortawesome/fontawesome-free/css/all.css";
```

## Edit the vite.config.js

update to read:

```js
// vite.config.js
import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [tailwindcss()],
})
```

### Update package.json
Edit package.json and update to look similar to this:

```json
{
  "name": "php-demo-2025-s2",
  "private": true,
  "version": "0.0.0",
  "type": "module",
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "preview": "vite preview"
  },
  "devDependencies": {
    "vite": "^7.0.6",
    "@tailwindcss/forms": "^0.5.10",
    "@tailwindcss/vite": "^4.1.11",
    "concurrently": "^9.2.0",
    "tailwindcss": "^4.1.11"
  },
  "dependencies": {
    "@fortawesome/fontawesome-free": "^7.0.0"
  }
}
```

## Install composer packages

We are going to install the following PHP packages:

- vlucas/phpdotenv

```shell
composer require vlucas/phpdotenv
```
- vlucas/phpdotenv provides the ability to read a .env file

### Edit the composer.json file

Update the file so that we have a scripts entry that reads:

```json
{
  "require": {
    "vlucas/phpdotenv": "^5.6"
  },
  "scripts": {
    "dev": [
      "Composer\\Config::disableProcessTimeout",
      "npx concurrently -c \"#93c5fd,#c4b5fd,#fdba74\" \"php -S localhost:8000 -t public\" \"npm run dev\" --names='server,vite'"
    ]
  }
}
```

We are now ready to execute our improved dev environment:

```shell
composer run dev
```

You will see that the PHP development server and vite will now execute and stay running at 
the same time, in the same shell!

To access the site go to: https://localhost:8000

```text
> Composer\Config::disableProcessTimeout
> npx concurrently -c "#93c5fd,#c4b5fd,#fdba74" "php -S localhost:8000 -t public" "npm run dev" --names='server,vite'
[server] [Wed Aug  6 16:55:30 2025] PHP 8.4.10 Development Server (http://localhost:8000) started
[vite]
[vite] > php-demo-2025-s2@0.0.0 dev
[vite] > vite
[vite]
[vite] Port 5173 is in use, trying another one...
[vite]
[vite]   VITE v7.0.6  ready in 437 ms
[vite]
[vite]   ➜  Local:   http://localhost:5174/
[vite]   ➜  Network: use --host to expose
[server] [Wed Aug  6 16:55:46 2025] [::1]:56089 Accepted
[server] [Wed Aug  6 16:55:46 2025] [::1]:56089 [200]: GET /experiments/exp-05.php
```

> Note:
>  
> We cannot use the tailwind css node package to dynamically create the required styling for 
> the experiments, so for now we will include the Tailwind CSS CDN for development ONLY.
> 
