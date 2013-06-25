require 'rubygems'
require 'capcake'
set :application, "ComplexGenie"
set :repository,  "http://scmadmin@180.149.243.244:8080/scm/git/ComplexGenie"

set :scm, :git # You can set :scm explicitly or Capistrano will make an intelligent guess based on known version control directory names
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "180.149.246.126"                          # Your HTTP server, Apache/etc
role :app, "180.149.246.126"                          # This may be the same as your `Web` server
role :db,  "180.149.246.126", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

set :cake_path, "/var/www/html/"
set :user, "root"
set :deploy_via, :copy

set :use_sudo, false
set :keep_releases, 5

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts

# If you are using Passenger mod_rails uncomment this:
# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end
capcake
