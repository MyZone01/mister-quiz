# Mister Quiz - Quiz Game Website

## Overview

Mister Quiz is a quiz game website built using the Laravel PHP framework. It allows users to register, login, play quizzes, view their profile, check the leaderboard, and more. The project aims to provide an interactive and engaging quiz experience with features such as XP accumulation, category-wise scoring, and a leaderboard to showcase top players.

## Instructions

1. **Setup:**
   - Clone the project or download the provided zip file.
   - Install PHP and Composer on your machine.
   - Navigate to the project directory and run `composer install` to install dependencies.

2. **Database Setup:**
   - Create a MySQL database named `mister_quiz`.
   - Configure the database connection in the `.env` file.

3. **Migration:**
   - Run `php artisan migrate` to create the necessary tables in the database.

4. **Authentication:**
   - Run `php artisan make:auth` to set up user registration and login.

5. **Model and Controllers:**
   - Generate models and controllers for handling quiz-related data.

6. **Routes:**
   - Define routes in `routes/web.php` for registration, login, homepage, quiz, profile, leaderboard, and logout.

7. **Views:**
   - Modify views in `resources/views/` for login, register, homepage, quiz, results, profile, leaderboard.

8. **Controller Logic:**
   - Implement logic in controllers to handle various functionalities.

9. **Authentication and Authorization:**
   - Implement middleware to ensure only authenticated users can access certain pages.

10. **Quiz Logic:**
    - Fetch questions and categories from the database.
    - Display questions and handle user answers.

11. **Results:**
    - Calculate and display quiz results on the results page.

12. **Leaderboard:**
    - Fetch and display the top 10 players on the leaderboard page.

13. **Profile:**
    - Display user-specific information on the profile page.

14. **Styling:**
    - Apply CSS styles to make the website visually appealing.

15. **Testing:**
    - Test the website thoroughly to ensure all functionalities work as expected.

16. **Documentation:**
    - Document your code and provide instructions for running the project.

17. **Submission:**
    - Submit the completed project, including all code and necessary files.

## Features

- User registration and login.
- XP accumulation based on correct answers.
- Category-wise scoring and statistics.
- Quiz leaderboard showcasing top players.
- Interactive quiz experience with real-time feedback.
- Profile page displaying user information and achievements.

## Authors

- @pba
- @serignmbaye
