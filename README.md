# KonekIn

![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)

## Introduction

KonekIn is a web application designed to bridge the gap between professionals in specific fields and audiences interested in those fields. Developed as a final project for the Platform-based Application Course, KonekIn serves as a networking platform where users can connect, interact, and share knowledge with industry experts.

## Features

- **Professional Profiles**: Users can create detailed profiles showcasing their expertise, experience, and projects.
- **Audience Interaction**: Audiences can follow professionals, ask questions, and participate in discussions.
- **Content Sharing**: Professionals can share articles, videos, and resources with their audience.
- **Search and Discovery**: Advanced search features allow users to find professionals by field, expertise, or location.
- **Real-time Notifications**: Users receive updates about new content, interactions, and messages.

## Technologies Used

- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Frameworks**: Laravel (for backend routing and MVC architecture)
- **Database**: MySQL for data storage and management

## Installation and Setup

To set up KonekIn locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/konekin.git
   cd konekin
2. **Install Dependencies**:
   ```bash
   composer install
   npm install
3. **Configure Environment Variables**:
   - Copy the .env.example file to .env.
   - Update database credentials and other configurations as needed.
4. **Run Migrations**:
    ```bash
    php artisan migrate
5. **Start the Development Server**:
    ```bash
    php artisan serve
6. **Access the Application**:
   - Open your browser and go to http://localhost:8000.
