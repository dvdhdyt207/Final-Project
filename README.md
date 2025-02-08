# Final-Project

This repository contains the implementation of my final project, which focuses on evaluating teacher performance using the Multi-Attribute Utility Theory (MAUT) method. This project is developed using PHP and MySQL for data management.

## Features

- **Teacher Performance Evaluation**: The system allows for assessing teacher performance based on predefined criteria.
- **MAUT Method**: Uses the MAUT method for multi-criteria decision-making.
- **Data Management**: CRUD (Create, Read, Update, Delete) operations for teachers and evaluation criteria.
- **Reports**: Generates performance evaluation reports in an easy-to-understand format.

## Technologies Used

- **Programming Language**: PHP
- **Database**: MySQL
- **Framework**: [Specify if any, e.g., Laravel, CodeIgniter]
- **Additional Libraries**: [Specify if any, e.g., TCPDF for PDF generation]

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/kepergok/Final-Project.git
   ```
2. **Database Configuration**:
   - Create a new MySQL database.
   - Import the SQL file from the `database/` folder into the newly created database.
3. **Application Configuration**:
   - Adjust database connection settings in the configuration file (e.g., `config.php` or as per your project structure).
4. **Run the Application**:
   - Ensure the web server (e.g., Apache) and MySQL server are running.
   - Access the application via `http://localhost/Final-Project/MAUT_Application` or the directory where you placed this project.

## Usage

1. **Login**:
   - Use default credentials or create a new account to access the system.
2. **Data Management**:
   - Add, update, or delete teacher data and evaluation criteria through the provided interface.
3. **Performance Evaluation**:
   - Evaluate teacher performance by entering scores for each criterion.
   - The system calculates the final score using the MAUT method.
4. **Reports**:
   - View and download performance evaluation results as reports.

## Directory Structure

```
Final-Project/
├── MAUT_Application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   ├── assets/
│   └── index.php
├── database/
│   └── database.sql
└── README.md
```

- **MAUT_Application/**: Contains the application source code.
- **database/**: Contains the SQL file for database initialization.
- **README.md**: This file.

## Contribution

Contributions to this project are welcome. Please create an *issue* to report bugs or request new features. You can also fork this repository and submit a *pull request* with your proposed changes.

## License

This project is licensed under the **MIT License**.  
See the [`LICENSE`](./LICENSE) file for more details.

---

Hope this README helps you better understand and use this project!