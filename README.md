# How to works

Deploy application Laravel/Lumen with git using deployer and scrutinizer.

# Dependecies

  - Scrutinizer - https://scrutinizer-ci.com
  - Deployer - https://deployer.org/download
  
# Using

Clone this repository.

After install dependencies, rename file "constants.example.php" to "constants.php" and replace values as example.

![captura de tela de 2017-09-23 23-29-50](https://user-images.githubusercontent.com/7466894/30778902-2e229d76-a0b7-11e7-943e-571f5cefbf31.png)

You need generate ssh keys and add on GitHub.

https://help.github.com/articles/connecting-to-github-with-ssh/

Now, run the file "scrutinizer.php". This file get last build comparate if is okay or not, case okay deploy application to machine configured. 

Example:

![captura de tela de 2017-09-23 23-35-40](https://user-images.githubusercontent.com/7466894/30778921-f3f4b7be-a0b7-11e7-8fb0-b26613fa988d.png)

Done, you deploy your application :) 

# Contribuing

Issues, PRs and share! 
