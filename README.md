# restaurant_management_system

Create database and create 2 tables in the database
Table 1 : To store data of registered users.
Table 2 : To store the order details.
------------------------------------------------------------------------------------------------------------------------------------------

CREATE DATABASE restaurant_db;

CREATE TABLE res_users(name varchar(30),last_name varchar(30),age int(2),mob varchar(10),gender varchar(6),mail varchar(30),pass varchar(30));

CREATE TABLE cust_orders(user_name varchar(30),food varchar(30),quantity int(5));
