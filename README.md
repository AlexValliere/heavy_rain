# heavy_rain

This project is an algorithmic test for the company TestWe, using PHP language.

Given a city represented by an array of n integers, each element of this array is a building of size j, where j is a natural integer and 0 <= j <= n. j represents the number of boxes contained in the building.

Here is an example of a city in tabular form:
[1, 2, 1, 5, 2, 4, 1, 0, 1, 2, 6, 4, 5, 2, 3, 4, 1, 2]

The rain falls on the city and fills the empty spaces (boxes) between the various buildings.

A water block is represented by several adjacent water boxes. The largest block of water is the block containing the most water boxes in the city. The size of the largest block of water is equal to the number of water boxes it contains.

The project asks to complete the HeavyRain class to find the largest block of water in the city.

# How I solved it

It's easier to understand a problem when you can have a visual of it, I have decided to write a simple code to display the city in HTML without the rain water. I have choose to write a code for this instead of using a paper because it would be easier and faster to think with it. Next is the part where I have to think on how to find a solution.

I have take a look on the HTML city viewer and try to find what were the conditions to get water trapped between two buildings and I couldn't find a solution after a few tries.

I have then think about when the rain can't get trapped: on the left side of the city, it's when the first building is smaller than the second building, and conversely for the right part of the city.

Now that I know when the water can't get trapped, with the help of the city viewer, I could see that for each building at a position n, I have to find what were the highest buildings before the position n and after the position n. I start to write an algorithm to detect the highest buildings on the left and right side for a position n.

With the "borders" (highest buildings on the left and right sides of a position n), it was easy to understand where the water would be.

My code to solve the problem was the following:
I look the table with the city from left to right.
For each position n, I look where are the borders and then calculate how much water the position n can contain.
If the position n have water, I use a while loop to look for the next positions with water and I start adding up the water from position n (waterPoolSizeOnCurrentIndex) and from the following positions and put the result in a variable waterPoolSize. When no water is found, I get out of the while loop and if waterPoolSize is bigger than the variable result, I copy the content of the first one to this last variable.

# Enabling HTML city viewer with rain
In the file HeavyRain.php, line 22 ( // $this->drawCity($city); ), remove the comment code: //
