# 🛍️ Synth - Premium Leather Store

<div align="center">

![Synth Logo](Images/logo.png)

**A Modern E-Commerce Platform for Premium Leather Products**

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)



</div>

---

---

## 🎯 About

**Synth** is a fully-featured, responsive e-commerce platform specializing in premium leather products including jackets, bags, belts, and accessories. Built with modern web technologies, it provides a seamless shopping experience across all devices.

### Why Synth?

- 🎨 **Modern UI/UX** - Clean, intuitive interface with smooth animations
- 📱 **Fully Responsive** - Optimized for desktop, tablet, and mobile devices
- 🛒 **Complete Shopping Flow** - From browsing to checkout
- 🔐 **Secure Authentication** - User registration and login system
- 💳 **Multiple Payment Options** - Support for various payment methods
- 🔍 **Advanced Search** - Filter and search products easily

---

## ✨ Features

### 🏪 Shopping Experience
- **Product Showcase** - Interactive product display with color variants
- **Real-time Cart** - Add/remove items with instant updates
- **Product Categories** - Browse by Men, Women, Jackets, Bags, Belts
- **Wishlist** - Save favorite items for later
- **Search & Filter** - Find products quickly with advanced filters

### 👤 User Features
- **User Authentication** - Secure sign up and login
- **Profile Dashboard** - Manage account details and preferences
- **Order History** - Track current and past orders
- **Account Balance** - View and manage account funds
- **Address Management** - Save multiple shipping addresses

### 🎨 Design Features
- **Responsive Design** - Works seamlessly on all screen sizes
- **Smooth Animations** - CSS transitions and hover effects
- **Color Variants** - View products in different colors
- **Image Galleries** - Multiple product images and angles
- **Modern UI Components** - Cards, modals, tabs, and more

### 🛠️ Admin Features
- **Product Management** - Add, update, delete products
- **User Management** - View and manage user accounts
- **Order Management** - Process and track orders
- **Inventory Control** - Monitor stock levels

---

## 🚀 Tech Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with flexbox/grid
- **JavaScript (ES6+)** - Interactive functionality
- **jQuery** - DOM manipulation and AJAX

### Backend
- **PHP** - Server-side logic
- **MySQL** - Database management
- **Apache/XAMPP** - Local development server

### Tools & Libraries
- **Git** - Version control
- **VS Code** - Code editor
- **phpMyAdmin** - Database administration

---

## 📁 Project Structure

```
_Synth/
├── About/                  # About us page
│   ├── about.html
│   ├── about.css
│   └── about.js
├── Cart/                   # Shopping cart
│   ├── cart.php
│   ├── addtocart.php
│   ├── remove.php
│   ├── cartpc.html
│   ├── cartphone.html
│   └── dbh.inc.php
├── Checkout/              # Checkout process
│   ├── checkout.html
│   ├── checkout.php
│   ├── buynow.php
│   └── Post Checkout/
│       ├── purchased.html
│       ├── nomoney.html
│       └── nostock.html
├── Contact/               # Contact page
│   ├── contact.html
│   ├── contact.css
│   └── contact.js
├── FAQ/                   # FAQ page
│   ├── faq.html
│   ├── faq.css
│   └── faq.js
├── Home/                  # Homepage
│   ├── home.html
│   ├── index.css
│   ├── page1-4.css
│   ├── script.js
│   └── Assets/
├── Product/               # Product pages
│   ├── product.html
│   ├── products.css
│   └── PHP/
│       ├── DisplayAll/
│       ├── DisplayJacket/
│       ├── DisplayBag/
│       ├── DisplayBelt/
│       ├── DisplayMen/
│       ├── DisplayWomen/
│       └── DisplaySearch/
├── Profile/               # User profile
│   ├── profile.html
│   ├── profile.css
│   └── profile.js
├── Shop/                  # Shop landing page
│   ├── shop.html
│   ├── shop.css
│   └── shop.js
├── Sign Up/               # Authentication
│   ├── signup.html
│   ├── login.css
│   ├── adduser.inc.php
│   └── checkuser.inc.php
├── Images/                # Image assets
└── README.md             # This file
```

---

## 🔧 Installation

### Prerequisites

Before you begin, ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/) (v8.0 or higher)
- [Git](https://git-scm.com/)
- Modern web browser (Chrome, Firefox, Edge)
- Code editor (VS Code recommended)

### Step-by-Step Setup

1. **Clone the Repository**

```bash
git clone https://github.com/mk23rd/Synth.git
cd Synth-Leather-Store
```

2. **Move to XAMPP Directory**

```bash
# Windows
move _Synth C:\xampp\htdocs\

# Linux/Mac
sudo mv _Synth /opt/lampp/htdocs/
```

3. **Start XAMPP Services**

- Open XAMPP Control Panel
- Start **Apache** and **MySQL** modules

4. **Access phpMyAdmin**

Navigate to: `http://localhost/phpmyadmin`

5. **Create Database**

```sql
CREATE DATABASE synth_db;
USE synth_db;
```

---

## 🗄️ Database Setup

### Create Tables

#### Users Table
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    balance DECIMAL(10,2) DEFAULT 0.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Products Table
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category VARCHAR(50),
    gender VARCHAR(10),
    image_url VARCHAR(255),
    stock INT DEFAULT 0,
    colors TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Cart Table
```sql
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    color VARCHAR(50),
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

#### Orders Table
```sql
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_amount DECIMAL(10,2),
    status VARCHAR(50) DEFAULT 'pending',
    shipping_address TEXT,
    payment_method VARCHAR(50),
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

#### Order Items Table
```sql
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10,2),
    color VARCHAR(50),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

### Sample Data

```sql
-- Insert sample products
INSERT INTO products (name, description, price, category, gender, image_url, stock, colors) VALUES
('Classic Leather Jacket', 'Premium leather jacket with modern design', 89.99, 'jacket', 'men', 'redleatherjacket.png', 50, 'Red,Yellow,Green,Blue'),
('Vintage Brown Bag', 'Handcrafted leather bag with vintage style', 65.00, 'bag', 'women', 'brownbag.png', 30, 'Brown,Black,Tan'),
('Designer Belt', 'Elegant leather belt with brass buckle', 45.50, 'belt', 'men', 'brownbelt.png', 100, 'Brown,Black');
```

---

## 💻 Usage

### Access the Website

1. **Homepage**
```
http://localhost/_Synth/Home/home.html
```

2. **Product Page**
```
http://localhost/_Synth/Product/product.html
```

3. **Sign Up**
```
http://localhost/_Synth/Sign%20Up/signup.html
```

### User Flow

1. **Browse Products** - Visit homepage or product page
2. **Sign Up/Login** - Create account or login
3. **Add to Cart** - Select products and add to cart
4. **Checkout** - Review cart and complete purchase
5. **Track Orders** - View order history in profile

### Admin Access

To access admin features, modify database:

```sql
UPDATE users SET role = 'admin' WHERE username = 'yourusername';
```

Then access:
```
http://localhost/_Synth/Product/PHP/insert.php
```

---

## 📸 Screenshots

## 🔌 API Endpoints

### Authentication

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/Sign Up/adduser.inc.php` | Register new user |
| POST | `/Sign Up/checkuser.inc.php` | User login |

### Cart Operations

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/Cart/addtocart.php` | Add item to cart |
| POST | `/Cart/remove.php` | Remove item from cart |
| GET | `/Cart/cart.php` | Get cart items |

### Checkout

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/Checkout/checkout.php` | Process order |
| POST | `/Checkout/buynow.php` | Quick buy |

### Product Management

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST | `/Product/PHP/addproduct.inc.php` | Add new product |
| POST | `/Product/PHP/updateproduct.inc.php` | Update product |
| GET | `/Product/PHP/search.php` | Search products |

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. **Fork the Repository**

```bash
git clone https://github.com/mk23rd/Synth.git
```

2. **Create a Feature Branch**

```bash
git checkout -b feature/AmazingFeature
```

3. **Commit Your Changes**

```bash
git commit -m 'Add some AmazingFeature'
```

4. **Push to Branch**

```bash
git push origin feature/AmazingFeature
```

5. **Open a Pull Request**

### Coding Guidelines

- Use meaningful variable names
- Comment your code
- Follow existing code style
- Test thoroughly before submitting

---



## 🤝 Contributors

This project was built collaboratively by our group.

> - [Benoni Moges](https://github.com/BenoniM)
> - [Michael Wagaye](https://github.com/mk23rd)
> - [Robel Yakob](https://github.com/Korvowastaken)
> - [Samuel Gosaye](https://github.com/SammyG02)


<div align="center">



⭐ Star this repo if you find it helpful!



</div>
