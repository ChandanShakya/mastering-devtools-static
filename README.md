# Mastering Chrome DevTools

The static site behind my Frontend Masters workshop

## Running the Site

This website is a collection of static HTML files that need to be served through an HTTP server. Here are a few options to run it locally:

### Using Node.js http-server

```bash
# Install globally
npm install -g http-server

# Run (from project directory)
http-server
```

### Using Python

```bash
# Python 3
python -m http.server 8080

# Python 2
python -m SimpleHTTPServer 8080
```

### Using PHP

```bash
php -S localhost:8080
```

Any of these commands will start a local server, typically accessible at `http://localhost:8080`. Choose the method that best suits your system and preferences.
