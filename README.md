# Stock Management System for Hardware Stores

The Stock Management System for Hardware Stores is a web application developed using Laravel, HTML, JavaScript, and MySQL. It allows hardware stores to efficiently manage their inventory, track stock levels, and handle sales transactions.

## Features

1. **User Authentication and Authorization:** The system provides secure user authentication and authorization mechanisms, allowing different roles such as admin, staff, and customer to access different functionalities.

2. **Dashboard:** The dashboard provides an overview of stock levels, sales statistics, and alerts for low stock items.

3. **Inventory Management:** Store administrators can add, edit, and delete products in the inventory. Each product entry includes details such as name, description, quantity, price, and supplier information.

4. **Stock Tracking:** The system tracks stock levels and automatically updates them upon each sale or stock replenishment. It also sends notifications when items reach low stock thresholds.

5. **Point of Sale (POS):** The application includes a POS module that allows store staff to process sales transactions quickly. It calculates the total price, handles discounts and promotions, and generates printable receipts.

6. **Purchase Orders:** Users can generate purchase orders to restock items. The system automatically updates stock levels upon receiving the ordered items.

7. **Reports and Analytics:** The system provides various reports and analytics to gain insights into sales performance, inventory turnover, and popular products.

## Technology Stack

- **Backend Framework:** Laravel
- **Frontend Technologies:** HTML, CSS, JavaScript
- **Database Management System:** MySQL

## Setup and Installation

To set up the Stock Management System for Hardware Stores, follow these steps:

1. Clone the repository from [GitHub Repository](https://github.com/your-repository-url).

2. Install the required dependencies by running the following command:

   ```bash
   composer install
   
3. Create a new MySQL database for the application.

4. Rename the .env.example file to .env and update the database connection details.

5. Generate an application key by running the following command:
   ```bash
   php artisan key:generate
6. Run the database migrations to create the necessary tables:
   ```bash
   php artisan migrate
7. Start the development server:   
   ```bash
   php artisan serve
8. Access the application by visiting http://localhost:8000 in your web browser.   

9. Setting up the symbolic link using php artisan storage:link

