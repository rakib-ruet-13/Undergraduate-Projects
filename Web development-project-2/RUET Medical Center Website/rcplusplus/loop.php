<!DOCTYPE html>
<html>

<head>
  <title>rcplusplus.com</title>
    <link rel="stylesheet" type="text/css" href="cc++_style.css">


</head>
<body>


<div class="main">




     <div class="cover_image">
       <p> <img src="logo.png"></p>
    </div>






    <div class="manubar">
    <ul>
       <li><a href="homepage.php">HOME</a></li>
      <li><a href="CC++.php">C/C++</a></li>
      <li><a href="ALGORITHM.php">ALGORITHM</a></li>
      <li><a href="RANKLIST.php">RANKLIST</a></li>
      <li><a href="ABOUT.php">ABOUT</a></li>
      <li><a href="forum.php.">FORUM</a></li>
    </ul>

    </div>


   

    <div class="content">

     <div class="intro">

     <h1>C LOOPS</h1>
     <br>
     <p>
     Loops are used in programming to repeat a specific block until some end condition is met. There are three loops in C programming:

     <br>


     <ol type="A">
       <li>for loop</li>
        <li>while loop</li>
         <li>do...while loop</li>
          <li>nested loop</li>
     </ol >
     
     <h1>For loop</h1>
     <p>
     Syntax for for loop statement in C :<br>

     <pre>
      for (initializationStatement; testExpression; updateStatement)
        {
           // codes 
        }
     </pre>
    
The initialization statement is executed only once.<br><br>

Then, the test expression is evaluated. If the test expression is false (0), for loop is terminated. But if the test expression is true (nonzero), codes inside the body of for loop is executed and the update expression is updated. This process repeats until the test expression is false.

<br><br>

The for loop is commonly used when the number of iterations is known.<br><br>

To learn more on test expression (when test expression is evaluated to nonzero (true) and 0 (false)), check out relational and logical operators. <br><br>

<b>For loop flowchart</b><br>
<img src="for-loop.jpg" alt="flowchart">


<br>
<b>Example:</b>
<br>

  <pre>
    
// Program to calculate the sum of first n natural numbers
// Positive integers 1,2,3...n are known as natural numbers

#include < stdio.h>
int main()
{
    int n, count, sum = 0;

    printf("Enter a positive integer: ");
    scanf("%d", &n);

    // for loop terminates when n is less than count
    for(count = 1; count <= n; ++count)
    {
        sum += count;
    }

    printf("Sum = %d", sum);

    return 0;
}



  </pre>

<br><b>Output:</b><br>
     
<pre>
     Enter a positive integer: 10
     Sum = 55
</pre>

The value entered by the user is stored in variable n. Suppose the user entered 10.
<br><br>

The count is initialized to 1 and the test expression is evaluated. Since, the test expression count <= n (1 less than or equal to 10) is true, the body of for loop is executed and the value of sum will be equal to 1.
<br><br>
Then, the update statement ++count is executed and count will be equal to 2. Again, the test expression is evaluated. The test expression is evaluated to true and the body of for loop is executed and the sum will be equal to 3. And, this process goes on.
<br><br>
Eventually, the count is increased to 11. When the count is 11, the test expression is evaluated to 0 (false) and the loop terminates. 

<br><br>

</p>
     
   
   <h1>WHILE loops</h1>

   <p>
     The syntax of a while loop is:
<pre>

while (testExpression) 
{
    //codes 
}
  
</pre>

<br>
The while loop evaluates the test expression.
<br><br>

If the test expression is true (nonzero), codes inside the body of while loop is evaluated. Then, again the test expression is evaluated. The process goes on until the test expression is false.
<br><br>
When the test expression is false, the while loop is terminated.
<br><br>

<b>flowchart</b><br>
<img src="c-while-loop.jpg" alt="while loop flowchart">
<br>
<b>Sample Program :</b>

<pre>

// Program to find factorial of a number
// For a positive integer n, factorial = 1*2*3...n

#include < stdio.h>
int main()
{
    int number;
    long long factorial;

    printf("Enter an integer: ");
    scanf("%d",&number);

    factorial = 1;

    // loop terminates when number is less than or equal to 0
    while (number > 0)
    {
        factorial *= number;  // factorial = factorial*number;
        --number;
    }

    printf("Factorial= %lld", factorial);

    return 0;
}
  
</pre>


<br>
<b>output</b>
<br>
<pre>
     Enter an integer: 5
     Factorial = 120
</pre>

   </p>


   <h1>do...while loop</h1>
   <p>

The do..while loop is similar to the while loop with one important difference. The body of do...while loop is executed once, before checking the test expression. Hence, the do...while loop is executed at least once.<br><br>

     <b>Syntax :</b>
     <br>
     <pre>
   do
  {
   // codes
  }
   while (testExpression);
     </pre>
<br>
The code block (loop body) inside the braces is executed once.<br><br>

Then, the test expression is evaluated. If the test expression is true, the loop body is executed again. This process goes on until the test expression is evaluated to 0 (false).<br><br>

When the test expression is false (nonzero), the do...while loop is terminated.<br><br>
<br>

<b>Flowchart</b>
<br>

<img src="c-do-while-loop.jpg" alt="flowchart do while loop">
<br>
<b>sample program: </b>
<br>
<pre>
// Program to add numbers until user enters zero

#include < stdio.h>
int main()
{
    double number, sum = 0;

    // loop body is executed at least once
    do
    {
        printf("Enter a number: ");
        scanf("%lf", &number);
        sum += number;
    }
    while(number != 0.0);

    printf("Sum = %.2lf",sum);

    return 0;
}
</pre>

<br>

<b>Output:</b>
<br>

<pre>
Enter a number: 1.5
Enter a number: 2.4
Enter a number: -3.4
Enter a number: 4.2
Enter a number: 0
Sum = 4.70
</pre>

   </p>


<h1>Break statement</h1>
<p>

It is sometimes desirable to skip some statements inside the loop or terminate the loop immediately without checking the test expression. In such cases, break and continue statements are used.<br><br>
  Syntax for break:<br>

  <pre>
        break;

  </pre>

  <br>
 <b>flowchart :</b>
 <br>
 <img src="c-break-statement.jpg" alt="break statement flowchart">

<br>
<b>How it works:</b>
<br>
<img src="how-break-statement-works_1.jpg" alt="workoing process of break statement">
<br>

<br>
<b>
  Examples:
</b>
<br>
<pre>
// Program to calculate the sum of maximum of 10 numbers
// Calculates sum until user enters positive number

# include < stdio.h>
int main()
{
    int i;
    double number, sum = 0.0;

    for(i=1; i <= 10; ++i)
    {
        printf("Enter a n%d: ",i);
        scanf("%lf",&number);

        // If user enters negative number, loop is terminated
        if(number < 0.0)
        {
            break;
        }

        sum += number; // sum = sum + number;
    }

    printf("Sum = %.2lf",sum);
    
    return 0;
} 
</pre>

<br><br>
<b>output:</b>
<br>
<pre>
Enter a n1: 2.4
Enter a n2: 4.5
Enter a n3: 3.4
Enter a n4: -3
Sum = 10.30
</pre>

</p>


<h1>continue statement</h1>
<p>
The continue statement skips some statements inside the loop. The continue statement is used with decision making statement such as if...else.<br><br>
syntax: <br>

<pre>
 continue;
</pre>

<br>
flowchart:
<br>
<img src="c-continue-flowchart.jpg" alt="continue flowchart">
<br>
<br><b>How it works</b><br>
<img src="how-continue-statement-works.jpg" alt="working process of continue statement">

<br>
sample program:<br>
<pre>

// Program to calculate sum of maximum of 10 numbers
// Negative numbers are skipped from calculation

# include < stdio.h >
int main()
{
    int i;
    double number, sum = 0.0;

    for(i=1; i <= 10; ++i)
    {
        printf("Enter a n%d: ",i);
        scanf("%lf",&number);

        // If user enters negative number, loop is terminated
        if(number < 0.0)
        {
            continue;
        }

        sum += number; // sum = sum + number;
    }

    printf("Sum = %.2lf",sum);
    
    return 0;
}

</pre>


<b>output:</b>
<br>
<pre>
Enter a n1: 1.1
Enter a n2: 2.2
Enter a n3: 5.5
Enter a n4: 4.4
Enter a n5: -3.4
Enter a n6: -45.5
Enter a n7: 34.5
Enter a n8: -4.2
Enter a n9: -1000
Enter a n10: 12
Sum = 59.7 
</pre> 


</p>




</div>

    <div class="sidebar">

    <ul>
       <li><a href="CC++.php">intro</a></li>
        <li><a href="variables.php">Variables</a></li>
         <li><a href="conditional statement.php">conditional statement</a></li>
       <li><a href="array.php">Array</a></li>
       <li><a href="loop.php">Loop</a></li>
       <li><a href="pointer.php">pointer</a></li>
       <li><a href="string.php">String</a></li>
        <li><a href="struct.php">Structure</a></li>
         <li><a href="file.php">File</a></li>
      </ul>

    
     </div>
     
        
    </div>



    <div class="links">
    <h3>Some useful learning websites</h3>
      <ul>
          <li><a href="http:\www.geeksforgeeks.com">GeeksforGeeks</a></li>
           <li><a href="http:\www.shafayeysplannet.com">Bangla algorithm</a></li>
            <li><a href="http:\www.cplusplus.com">C++ STL </a></li>
             <li><a href="http:\www.codeforces.com">Competetive programming</a></li>
              <li><a href="http:\www.w3school.com">W3school.com</a></li>
      </ul>  

    </div>


    <div class="copy">
        <p>&copy;Rakibul hassan <br>all rights reserved by rcplusplus.com</p>
    </div>


  
</div>
</body>
</html>