
# <p align="center"> Questions & Answers Api </p>

# Introduction
<hr>
    - Githup link : <a href="https://github.com/shassa/Q-A">Q&AApi</a> <br>
    - Item Version : v 1.0 <br>
    - Author : Nashwa Hassan <br>
   
<hr>

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

## Question use case

<img src="https://github.com/shassa/Q-A/blob/master/images/readme/questionusecase.png" height="300px" alt="questions UseCase">

<hr>

## Answers use case

<img src="https://github.com/shassa/Q-A/blob/master/images/readme/answerusecase.png" height="300px" alt="questions UseCase">

## Use CAse Scenarios 

<p>Simple api to get the ('question','answers') from Db tables .<br>Add | Delete Question or Answer <br>show all questions sorted by created at,<br> one question and his answers sorted by 'up' points,<br>search questions with Scout\Algolia.<br> All routes protected with passport laravel package.</p>

## Query Sequence

<img src="https://github.com/shassa/Q-A/blob/master/images/readme/querysequence.png" height="300px" alt="questions UseCase">

## Search Sequence

<img src="https://github.com/shassa/Q-A/blob/master/images/readme/searchsequence.png" height="300px" alt="questions UseCase">


