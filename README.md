
# <p align="center"> Questions & Answers Api </p>

# Introduction
<hr>
    - Githup link : <a href="https://github.com/shassa/PostsApi">Q&AApi</a> <br>
    - Item Version : v 1.0 <br>
    - Author : Nashwa Hassan <br>
   
<hr>

## Abilities
<p>Simple api to get the ('question','answers') from Db tables .<br>Add | Delete Question or Answer <br>show all questions sorted by created at,<br> one question and his answers sorted by 'up' points,<br>search questions with Scout\Algolia.<br> All routes protected with passport laravel package.</p>

## Main Components
 - ### laravel\passport
     Get & Authorize Token
 - ### Laravel Factories & seed
    Create random Posts
 - ### Resources
    Return JsonResource  
 - ### Scout\Algolia
    Search question    
    
## Functional Requirements 
- List all questions 
- Show one question and it's answers
- Question's answer sorted by points
- Give points to question up or down
- Give points to answer up or down
- Add | delete answer
- Add | delete question with it's answers
- search questions
 
 <hr>

## Non-Functional Requirements 
- 10 Questions in page
- 10 Question in search result page
- Authorization

<hr>

## use case

<img src="{{asset('images\readme\questionusecase.png')}}" alt="questions UseCase">

## Install And Configure Laravel Passport
- Laravel Passport provides a full 0Auth2 server implementation for Laravel applications. With it, you can easily generate a personal access token to uniquely identify a currently authenticated user.

- ``` $ composer require laravel/passport ```

- Once the installation is complete, a new migration file containing the tables needed to store clients and access tokens will have been generated for your application. Run the following command to migrate your database:

- ``` $ php artisan migrate ```
- Next, to create the encryption keys needed to generate secured access tokens, run the command below:

- ``` $ php artisan passport:install ```

