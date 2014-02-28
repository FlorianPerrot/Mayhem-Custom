set :application, "Mayhem"
set :domain,      "ssh.mayhem-custom.fr"

set :app_path,                "app"
set :web_path,                "web"


set :repository,  "D:/Developpement/Web/Mayhem"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`


set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL