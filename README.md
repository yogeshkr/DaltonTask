Setup Instruction :

1. Install Git from https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
2. Install Composer from https://getcomposer.org/download/
3. Run the following commands
    
    git clone https://github.com/yogeshkr/DaltonTask.git
    
    cd DaltonTask/
    
    git checkout dev
    
    composer install
    
    cp .env.example .env     (To Crete envrionment file from envrionment example file)
    
    php artisan key:generate
    
    php artisan serve
    
    Enter http://127.0.0.1:8000/nameentry in the browser.
    



