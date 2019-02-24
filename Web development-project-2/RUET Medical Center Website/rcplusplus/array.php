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

     <h1>C Arrays</h1>
     <br>
     <p>
     In C programming, one of the frequently arising problem is to handle similar types of data. For example: If the user want to store marks of 100 students. This can be done by creating 100 variable individually but, this process is rather tedious and impracticable. These type of problem can be handled in C programming using arrays.
     <br><br>

     An array is a sequence of data item of homogeneous value(same type).
     <br><br>
     
     Arrays are of two types:
     <br>

     <ol type="A">
       <li>One-dimensional arrays</li>
        <li>Multidimensional arrays</li>
     </ol >
     
     <h1>One-dimensional arrays</h1>
     <p>
     Syntax for 1D array :<br>

     <pre>
     data_type array_name[array_size];

     For example:
     int age[5];

     </pre>

Here, the name of array is age. The size of array is 5,i.e., there are 5 items(elements) of array age. All element in an array are of the same type (int, in this case)..<br><br>

<br><br>

<b>Array elements</b><br>
Size of array defines the number of elements in an array. Each element of array can be accessed and used by user according to the need of program. For example:<br><br>
<pre>
  int age[5];
</pre>
<br>

<img src="c_arrays_elements.jpg" alt="array elements">
<br>

Note that, the first element is numbered 0 and so  on.<br><br>

Here, the size of array age is 5 times the size of int because there are 5 elements.
<br><br>
Suppose, the starting address of age[0] is 2120d and the size of int be 4 bytes. Then, the next address (address of a[1]) will be 2124d, address of a[2] will be 2128d and so on.<br><br>

<b>Initialization of one-dimensional array:</b>
<br>
Arrays can be initialized at declaration time in  this source code as:<br>
  <pre>
  int age[5]={2,4,34,3,4};
  </pre>
<br>
It is not necessary to define the size of arrays during initialization.<br>
<pre>
  int age[]={2,4,34,3,4};
</pre>
<br>
In this case, the compiler determines the size of array by calculating the number of elements of an array.<br><br>

<img src="C_initialization_of_arrays.jpg">
<br>

<br><b>For example</b><br>
     
<pre>
scanf("%d",&age[2]);
/* statement to insert value in the third
 element of array age[]. */

scanf("%d",&age[i]);
/* Statement to insert value in (i+1)th element of array age[]. */
/* Because, the first element of array is age[0], 
second is age[1], ith is age[i-1] and (i+1)th is age[i]. */

printf("%d",age[0]);
/* statement to print first 
element of an array. */

printf("%d",age[i]);
/* statement to print (i+1)th
 element of an array. */
</pre>

<br>
<b>Sample program:</b>
<br><br>
<pre>
/* C program to find the sum marks of n students using arrays */

#include < stdio.h>
int main(){
     int marks[10],i,n,sum=0;
     printf("Enter number of students: ");
     scanf("%d",&n);
     for(i=0;i< n;++i){
          printf("Enter marks of student%d: ",i+1);
          scanf("%d",&marks[i]);
          sum+=marks[i];
     }
     printf("Sum= %d",sum);
return 0;
}


</pre>

<br>
<b>output:</b>
<br>

<pre>
Enter number of students: 3
Enter marks of student1: 12
Enter marks of student2: 31
Enter marks of student3: 2
sum=45
</pre>

<br>
Suppose, you declared the array of 10 students. For example: arr[10]. You can use array members from arr[0] to arr[9]. But, what if you want to use element arr[10], arr[13] etc. Compiler may not show error using these elements but, may cause fatal error during program execution.<br><br>

</p>
     
   
   <h1>Multidimensional Arrays</h1>

   <p>

   C programming language allows programmer to create arrays of arrays known as multidimensional arrays. For example:<br>
    
<pre>
       float a[2][6];
</pre>

<br>
Here, a is an array of two dimension, which is an example of multidimensional arra<br><br>

For better understanding of multidimensional arrays, array elements of above example can be thinked of as below:
<br><br>

<img src="C-multidimensional-arrays-working.jpg" alt="Multidimensional array">
<br>

<b>Initialization of Multidimensional Arrays</b>
<br>

<pre>

int c[2][3]={{1,3,0}, {-1,5,9}};
                 OR
int c[][3]={{1,3,0}, {-1,5,9}};
                 OR 
int c[2][3]={1,3,0,-1,5,9};

</pre>

<b>Initialization Of three-dimensional Array</b>
<br>

<pre>

double cprogram[3][2][4]={ 
{{-0.1, 0.22, 0.3, 4.3}, {2.3, 4.7, -0.9, 2}},
 {{0.9, 3.6, 4.5, 4}, {1.2, 2.4, 0.22, -1}},
 {{8.2, 3.12, 34.2, 0.1}, {2.1, 3.2, 4.3, -2.0}} 
};

</pre>

<br>
Suppose there is a multidimensional array arr[i][j][k][m]. Then this array can hold i*j*k*m numbers of data.<br><br>

Similarly, the array of any dimension can be initialized in C programming.
<br><br>

<br>
<b>Example of Multidimensional Array In C</b>
<br>
Write a C program to find sum of two matrix of order 2*2 using multidimensional arrays where, elements of matrix are entered by user.
<br><br>

<pre>
    #include < stdio.h>
int main(){
   float a[2][2], b[2][2], c[2][2];
   int i,j;
   printf("Enter the elements of 1st matrix\n");
/* Reading two dimensional Array with the help of two for loop.
 If there was an array of 'n' dimension, 'n' numbers of loops 
 are needed for inserting data to array.*/   
   for(i=0;i< 2;++i)      
       for(j=0;j< 2;++j){
       printf("Enter a%d%d: ",i+1,j+1);
       scanf("%f",&a[i][j]);
       }
   printf("Enter the elements of 2nd matrix\n");
   for(i=0;i< 2;++i)
       for(j=0;j< 2;++j){
       printf("Enter b%d%d: ",i+1,j+1);
       scanf("%f",&b[i][j]);
       }
   for(i=0;i< 2;++i)
       for(j=0;j< 2;++j){
/* Writing the elements of multidimensional array using loop. */
       c[i][j]=a[i][j]+b[i][j];  /* Sum of corresponding elements 
       of two arrays. */
       }
   printf("\nSum Of Matrix:");
   for(i=0;i< 2;++i)
       for(j=0;j< 2;++j){
       printf("%.1f\t",c[i][j]);  
           if(j==1)             /* To display matrix sum in order. */
              printf("\n");
      }
return 0;
}

</pre>

<br>
<b>output:</b>
<br>
<pre>
Enter the elements of 1st matrix
Enter a11: 2;
Enter a12: 0.5;
Enter a21: -1.1;
Enter a22: 2;
Enter the elements of 2nd matrix
Enter b11: 0.2;
Enter b12: 0;
Enter b21: 0.23;
Enter b22: 23;

Sum Of Matrix:
2.2     0.5
-0.9    25.0
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
           <li><a href="http:\www.shafayetsplannet.com">Bangla algorithm</a></li>
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