1. Check out repository from Github
2. Run ``composer update``
3. Edit ``app/config/parameters.yml`` with database information
4. Run ``php app/console doctrine:migrations:migrate`` - this will install the default database