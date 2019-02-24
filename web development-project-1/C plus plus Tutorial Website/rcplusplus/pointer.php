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

     <h1>Pointers</h1>
     <br>
     <p>
A pointer is a variable whose value is the address of another variable, i.e., direct address of the memory location. Like any variable or constant, you must declare a pointer before using it to store any variable address. The general form of a pointer variable declaration is -
    
     <br><br>
     

     <pre>
   type *var-name;
     </pre>


<br>

<b>Reference operator(&)</b><br>

If var is a variable then, &var is the address in memory.


<br>

 

<pre>

/* Example to demonstrate use of reference operator in C programming. */
#include <stdio.h>
int main(){
  int var=5;
  printf("Value: %d\n",var);
  printf("Address: %d",&var);  //Notice, the ampersand(&) before var.
  return 0;
}
</pre>


<br><b>Output</b><br>
     
<pre>
Value: 5 
Address: 2686778
</pre>

<br>
Note: You may obtain different value of address while using this code.<br><br>

In above source code, value 5 is stored in the memory location 2686778. var is just the name given to that location.<br><br>

You, have already used reference operator in C program while using scanf() function.
<br><br>

=
<pre>
   scanf("%d",&var);
</pre>

<br>


<b>Reference operator(*) and Pointer variables</b>
<br><br>
Pointer variable or simply pointer are the special types of variables that holds memory address rather than data, that is, a variable that holds address value is called a pointer variable or simply a pointer.<br><br>


<b>Declaration of Pointer</b>
<br>
<br>
Dereference operator(*) are used for defining pointer variable.<br><br>

<pre>
    data_type* pointer_variable_name;
    int* p;
</pre>

<br>Above statement defines, p as pointer variable of type int.
.<br><br>

<b>Example To Demonstrate Working of Pointers</b>
<br>
<pre>
/* Source code to demonstrate, handling of pointers in C program */
#include < stdio.h>
int main(){
   int* pc;
   int c;
   c=22;
   printf("Address of c:%d\n",&c);
   printf("Value of c:%d\n\n",c);
   pc=&c;
   printf("Address of pointer pc:%d\n",pc);
   printf("Content of pointer pc:%d\n\n",*pc);
   c=11;
   printf("Address of pointer pc:%d\n",pc);
   printf("Content of pointer pc:%d\n\n",*pc);
   *pc=2;
   printf("Address of c:%d\n",&c);
   printf("Value of c:%d\n\n",c);
   return 0;
}

</pre>
<br>
<b>Output:</b>
<br><br>

<pre>

Address of c: 2686784
Value of c: 22

Address of pointer pc: 2686784
Content of pointer pc: 22

Address of pointer pc: 2686784
Content of pointer pc: 11

Address of c: 2686784
Value of c: 2

</pre>

<br><br>
<img src="pointers-in-c-programming.jpg">
<br>


<pre>
  
Explanation of program and figure

Code int* pc; creates a pointer pc and a code int c; creates
normal variable c. Pointer pc points to some address and that
address has garbage value. Similarly, variable c also has
garbage value at this point.

Code c=22; makes the value of c equal to 22, i.e.,22 is stored
in the memory location of variable c.

Code pc=&c; makes pointer, point to address of c. Note that, &c 
is the address of variable c (because c is normal variable) and 
pc is the address of pc (because pc is the pointer variable). S
ince the address of pc and address of c is same, *pc will be 
equal to the value of c.

Code c=11; makes the value of c, 11. Since, pointer pc is 
pointing to address of c. Value inside address pc will a
lso be 11.

Code *pc=2; change the contents of the memory location pointed by 
pointer pc to change to 2. Since address of pointer pc is same as 
address of c, value of c also changes to 2.
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