Laravel Website setup from git repo:
# .env file 
- create .env file in FitAndMindful
- copy .env.example contents into .env file
- inside .env, set SESSION_DRIVER = "file"
# Installations
- still in FitAndMindful file
- npm install
- composer install (can take a few minutes or more)
- php artisan key:generate
# Run server
- still in FitAndMindful file
- composer run dev
- Open the link with port 8000 (or another one of the 3, sometimes it changes)
- [Ctrl + c] to stop server once you are done