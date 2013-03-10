1. Check out repository from Github
2. Copy ``app/config/parameters.yml-dist`` to ``app/config/parameters.yml`` and edit accordingly
3. Run ``composer update``
4. Run ``php app/console doctrine:migrations:migrate`` - this will install the default database
5. Run ``php app/console assets:install -e prod`` - this will install images and css
6. Run ``php app/console assetic:dump -e prod``
