# BikEEE

Tools: PHP,HTML,CSS

# Tasks:

1. Retrieve data from CSV file to JSON
2. Sort out the bikes by its popularity
3. Aggregate the model names so that if user gives slightly different model names then program can adjust properly.
4. Displayed top 3 popular bikes


# Feedback

I really enjoyed the task and have learned something new. I have heard about TDD approach before but never tried myself. Although I couldn't write the test cases because of the short time but i thought about it after completing the task and it really makes sense. My realization is that I would write my code differently, If I would have written the test cases before start writing the functions.  
I also never convert csv to json before, so it was definetly fun and good learning experience for me.

I will really appreicate some feedbacks from you guys as well whether you guys have liked my code or not so that I can develop myself.

# Further Development

1. Write the test cases for finding the most popular model.
2. Code can be written by following OOP approach.
3. I considered limited special characters while aggregating model names it can be further developed by using regex to remove more special characters.
4. Both "ET-9 evo" and "Dirt Drifter 3000" appeared two times in the csv. I select one of them which was appeared twice first but it can be selected by alphabetically as well.

 
# Instructions

You will be needing PHP environment installed in your machine. If you are using mac there is a chance php is already intalled in your machine but if you are using windows or linux you might have needed to install PHP first. You can check whether php is installed in your machine by this command 

```
php -v
```
if PHP is not installed then please install PHP 7.0 or higher version first.
Then Run the following command in the terminal from the BikEEE folder:

```
php -S localhost:3030
```
it will start the server on 3030 port. If your 3030 port is unavailable you can use any othe port which is available

If server is started then open the browser and paste this in the url 
```
localhost:3030
```
