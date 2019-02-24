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

     <h1>C Structures</h1>
     <br>
     <p>
       Structure is the collection of variables of different types under a single name for better handling. For example: You want to store the information about person about his/her name, citizenship number and salary. You can create these information separately but, better approach will be collection of these information under single name because all these information are related to person.
     <br><br>
     
     <b>Structure Definition in C</b><br><br>
     Keyword struct is used for creating a structure.<br>
     <br>

     <b>syntax</b><br>

     <pre>
    struct structure_name 
   {
    data_type member1;
    data_type member2;
    .
    .
    data_type memeber;
   };

     </pre>
    <br>
     <br>
     We can create the structure for a person as mentioned above as:
     <br><br>
     <pre>
     struct person
   {
    char name[50];
    int cit_no;
    float salary;
   };

     </pre>
     </p>
     <h1>Structure variable declaration</h1>
     <p>
     When a structure is defined, it creates a user-defined type but, no storage is allocated. For the above structure of person, variable can be declared as:

     <br><br>

     <pre>
      struct person
    {
      char name[50];
      int cit_no;
      float salary;
    };

    Inside main function:
    struct person p1, p2, p[20];
       </pre>

       <br>
       When the above code is compiled and executed, it produces the following result :
       <br>
       <br>
       <pre>
        Greeting message: Hello 
       </pre>
       <br>
      Another way of creating sturcture variable is:<br><br>

      
       


<pre>
struct person
{
    char name[50];
    int cit_no;
    float salary;
}p1 ,p2 ,p[20];
</pre>


<br>
In both cases, 2 variables p1, p2 and array p having 20 elements of type struct person are created.
<br><br>  

</p>
<h1>Accessing members of a structure</h1>   
<p>
There are two types of operators used for accessing members of a structure.
<br><br>
<pre>

1.Member operator(.)

2.Structure pointer operator(->) (will be discussed in structure 
and pointers chapter)

Any member of a structure can be accessed as: 
structure_variable_name.member_name

</pre>

<br>
Suppose, we want to access salary for variable p2. Then, it can be accessed as:
<br>
<br>
<pre>
  p2.salary
</pre>



 

<br>
<b>Sample program:</b>
<br>
<br>
Write a C program to add two distances entered by user. Measurement of distance should be in inch and feet.(Note: 12 inches = 1 foot)<br>
<br>


<pre>
   
#include < stdio.h>
struct Distance{
    int feet;
    float inch;
}d1,d2,sum;
int main(){
    printf("1st distance\n");
    printf("Enter feet: ");
    scanf("%d",&d1.feet);  /* input of feet for structure variable d1 */
    printf("Enter inch: ");
    scanf("%f",&d1.inch);  /* input of inch for structure variable d1 */
    printf("2nd distance\n");
    printf("Enter feet: ");
    scanf("%d",&d2.feet);  /* input of feet for structure variable d2 */
    printf("Enter inch: ");
    scanf("%f",&d2.inch);  /* input of inch for structure variable d2 */
    sum.feet=d1.feet+d2.feet;
    sum.inch=d1.inch+d2.inch;
    if (sum.inch>12){  //If inch is greater than 12, changing it to feet.
        ++sum.feet;
        sum.inch=sum.inch-12;
    }
    printf("Sum of distances=%d\'-%.1f\"",sum.feet,sum.inch); 
/* printing sum of distance d1 and d2 */
    return 0;
}

</pre>



<b>Output:</b>
<br>
<pre>

1st distance
Enter feet: 12
Enter inch: 7.9
2nd distance
Enter feet: 2
Enter inch: 9.8
Sum of distances= 15'-5.7"

</pre>
<br>



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