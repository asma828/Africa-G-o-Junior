Interactive Educational Geography Game
Learn and Explore Africa
Project Overview
This project is an educational web application aimed at helping students learn and test their geographic knowledge about the African continent. It provides an interactive platform to explore countries, their capitals, key cities, populations, and official languages.

Purpose
The primary goal is to create a tool that enriches the educational experience and fosters better geographic knowledge through interactive features.

Features
User Stories
As a Designer:
Functional Design:

Create a Use Case Diagram to identify the primary functionalities:
Add African countries with key cities, populations, and official languages.
Modify or delete existing country details.
Display a list of African countries with their associated details.
Database Modeling:

Create an Entity-Relationship Diagram (ERD) to define:
Relationships between countries and their major cities.
Attributes for entities like population and official languages.
As a Back-End Developer:
Database Setup:

Design a relational database to manage:
Countries: ID, Name, Population, Language(s), Continent.
Cities: ID, Name, Description, Type (capital or other).
SQL Queries:

Develop queries to:
Add a country and its details (population, language, cities).
Update country or city information.
Delete a country along with its associated cities.
Retrieve the list of African countries with their details.
PHP Script:

Implement CRUD operations for countries and cities using PHP.
Dynamically fetch and display country data from the database.
Technology Stack
Front-End: HTML, CSS, JavaScript.
Back-End: PHP.
Database: MySQL.
