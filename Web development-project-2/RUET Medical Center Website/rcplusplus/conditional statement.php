<!DOCTYPE html>
<html>

<head>
  <title>rcplusplus.com</title>
    <link rel="stylesheet" type="text/css" href="cc++_style.css">


</head>
<body>


<div class="main">




    <div class="cover_image">
     <p> <img src="\rcplusplus\logo.PNG"></p>
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

     <h1>conditional statement</h1>
     <br>
     <p>
     Conditional statements are used to execute a statement or a group of statement based on certain conditions.

     <br>


     <ol type="A">
       <li>if</li>
        <li>if else</li>
         <li>else if</li>
          <li>switch</li>
           <li>goto</li>
     </ol >
     
     <h1>if conditional statement in C :</h1>
     <p>
     Syntax for if statement in C :<br>

     <pre>
       if(condition)
       {
         Valid C Statements;
       }
     </pre>
    
    If the condition is true the statements inside the parenthesis { }, will be executed, else the control will be transferred to the next statement after if.<br>

    sample program:<br> 
    <pre>
    #include< stdio.h>
    void main()
    {
      int a,b;
       a=10;
       b=5;
       if(a>b)
       {
        printf("a is greater");
       }

    }
    </pre>

     </p>

     <p>
     <pre style="padding: 10px" >
Program Algorithm / Explanation :

#include< stdio.h> header file is included because,
 the C in-built statement printf we used in this program 
 comes under stdio.h header files.
#include< conio.h> is used because the C in-built
 function getch() comes under conio.h header files.
main () function is the place where C program execution begins.
Two variables a & b of type int is declared.
Variable a is assigned a value of 10 and variable b with 5.
A if condition is used to check whether a is greater than b. if(a>b)
As a is greater than b the printf inside the 
if { } is executed with a message “a is greater”.
Output :
     
     </pre>
    
     </p>

     
   
   <h1>if else in C :</h1>

   <p>
     
<pre>
if(condition)
{
Valid C Statements;
}
else
{
Valid C Statements;
}
  
</pre>

<br>
n if else if the condition is true the statements between if and else is executed. If it is false the statement after else is executed.

<br>
<b>Sample Program :</b>

<pre>

#include< stdio.h >
#include< conio.h >
void main()
{
int a,b;
printf("Enter a value for a:");
scanf("%d",&a);
printf("\nEnter a value for b:");
scanf("%d",&b);

if(a>b)
{
printf("\n a got greater value");
}
else
{
printf("\n b got greater value");
}
printf("\n Press any key to close the Application");  
}
  
</pre>


<br>
<pre>
Program Algorithm / Explanation :

#include<stdio.h> header file is included because, the C in-built 
statement printf we used in this program comes under stdio.h 
header files.
#include<conio.h> is used because the C in-built function getch()
 comes under conio.h header files.
main () function is the place where C program execution begins.
Two integer variable a and b are declared.
User Input values are received for both a and b using scanf.
An if else conditional statement is used to check whether a is
 greater than b.
If a is greater than b, the message “a got greater value” 
is displayed using printf.
If b is greater the message “b got greater value” is displayed.
Output :
</pre>

   </p>


   <h1>else if in C :</h1>
   <p>
     <b>Syntax :</b>
     <br>
     <pre>
 if(condition)
{
Valid C Statements;
}
else if(condition 1)
{
Valid C Statements;
}
-
-
else if(condition n)
{
Valid C Statements;
}
else
{
Valid C Statements;
}
     </pre>
<br>
In else if, if the condition is true the statements between if and else if is executed. If it is false the condition in else if is checked and if it is true it will be executed. If none of the condition is true the statement under else is executed.
<br>

<b>sample program: </b>

<pre>
#include< stdio.h>
#include< conio.h>
void main()
{
int a,b;
printf("Enter a value for a:");
scanf("%d",&a);
printf("\nEnter a value for b:");
scanf("%d",&b);
if(a>b)
{
printf("\n a is greater than b");
}
else if(b>a)
{
printf("\n b is greater than a");
}
else
{
printf("\n Both a and b are equal");
}
printf("\n Press any key to close the application");
getch();
}
</pre>

<br>

<pre>
Program Algorithm / Explanation :

#include< stdio.h> header file is included because, the C
 in-built statement printf we used in this program comes
  under stdio.h header files.
#include< conio.h> is used because the C in-built function 
getch comes under conio.h header files.
main () function is the place where C program execution begins.
Two variables a & b of type int are declared.
Values for a & b are received from user through scanf.
if condition is used to check whether a is greater than b. if(a>b)
If the condition is true the statement between if and
 else if is executed.

If the condition is not satisfied else if() condition
 is checked. Else if(b>a)
If b is greater than a the statement between else if 
and else is executed.

If both the conditions are false the statement 
after else is executed.

</pre>

   </p>


<h1>Switch statement in C :</h1>
<p>
  Syntax :<br>

  <pre>
switch(variable)
{
case 1:
Valid C Statements;
break;
-
-
case n:
Valid C Statements;
break;
default:
Valid C Statements;
break;
}

  </pre>

  <br>
  Switch statements can also be called matching case statements. If matches the value in variable (switch(variable)) with any of the case inside, the statements under the case that matches will be executed. If none of the case is matched the statement under default will be executed.<br>


</p>

<h1>goto statement in C :</h1>
<p>

syntax: <br>

<pre>
 goto label; 
</pre>

<br>
sample program:<br>
<pre>
#include< stdio.h>
#include< conio.h>
void main()
{
int a,b;
printf("Enter 2 nos A and B one by one : ");
scanf("%d%d",&a,&b);
if(a>b)
{
goto first;
}
else
{
goto second;
}

first:
printf("\n A is greater..");
goto g;

second:
printf("\n B is greater..");

g:
getch();
}
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