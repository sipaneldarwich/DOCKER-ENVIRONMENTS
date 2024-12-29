# THIS IS NOT WORKING IF YOU ARE WORKING FROM GOOGLE DRIVE
# My Next.js App

This is a simple Next.js application that serves as a starting point for building web applications using React.

### Installation

1. run Docker compose
  ```
  docker compose up -d 
  ```

2. Attach to the new container
docker exec -it docker-nextjs-web-1 bash

3. Install the dependencies:

   ```
   npm install
   ```

### Running the Application

To run the application in development mode, use the following command:

```
npm run dev
```

This will start the Next.js development server, and you can view the application in your browser at `http://localhost:3000`.

### Building for Production

To build the application for production, run:

```
npm run build
```

After building, you can start the production server with:

```
npm start
```

### Folder Structure

- `pages/`: Contains the application's pages.
  - `index.js`: The main entry point of the application.
  - `_app.js`: Custom App component for initializing pages.
- `public/`: Contains static assets like images and icons.
  - `favicon.ico`: The favicon for the application.
- `styles/`: Contains global CSS styles.
  - `globals.css`: Global styles applied throughout the application.
- `next.config.js`: Configuration file for customizing Next.js settings.
- `package.json`: Lists dependencies and scripts for the project.

### License

This project is licensed under the MIT License. See the LICENSE file for details.