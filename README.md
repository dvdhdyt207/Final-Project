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
- **Framework**: *None* (vanilla PHP used)
- **Additional Libraries**: *None specified* (can be added based on future improvements)

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/kepergok/Final-Project.git
   ```

2. **Database Configuration**:
   - Create a new MySQL database.
   - Import the SQL file located in the `database/` folder into the newly created database using phpMyAdmin or MySQL CLI.

3. **Application Configuration**:
   - Update the database connection settings (host, username, password, database name) in the configuration file, typically found in `config.php`.

4. **Run the Application**:
   - Ensure your local server (e.g., XAMPP, Laragon) is running Apache and MySQL.
   - Place the project folder inside the web root directory (e.g., `htdocs` for XAMPP).
   - Open your browser and go to:
     ```
     http://localhost/Final-Project/MAUT_Application
     ```

## Usage

1. **Login**  
   Use the following credentials to access the system:
   - **Username**: `admin`  
   - **Password**: `ps man1bkt`

2. **Data Management**  
   - Add, edit, or delete teacher data and evaluation criteria through the interface.

3. **Performance Evaluation**  
   - Perform teacher evaluations by entering scores for each criterion.
   - The system will calculate the final result using the MAUT method.

4. **Reports**  
   - View or download teacher evaluation results as reports.

## Repository Structure

```
- MAUT_Application/      # Application source code
- database/              # Contains SQL file for initializing the database
- README.md              # Project documentation
```

## Contribution

Contributions are welcome! If you'd like to improve this project:
- Fork the repository
- Make your changes
- Create a pull request

Or open an issue to report bugs or suggest enhancements.

## License

This project is licensed under the **MIT License**.  
See the [`LICENSE`](./LICENSE) file for more details.

---

*Thank you for checking out this project. I hope it helps others who want to learn about multi-criteria decision-making with PHP!*
