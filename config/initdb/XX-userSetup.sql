-- Create general PHP user with select access to the specific DBs only
CREATE USER 'WebUser'@'%' IDENTIFIED BY '1ae5b321-dd5f-4562-8fee-b23d9dba044e';
GRANT USAGE ON *.* TO 'WebUser'@'%' REQUIRE NONE WITH
    MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT SELECT ON `myflix`.* TO 'WebUser'@'%';
GRANT SELECT ON `people`.* TO 'WebUser'@'%';
GRANT SELECT ON `simpsons`.* TO 'WebUser'@'%';
GRANT SELECT ON `littleIMDB`.* TO 'WebUser'@'%';
