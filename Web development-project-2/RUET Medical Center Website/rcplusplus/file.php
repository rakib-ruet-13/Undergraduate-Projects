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

     <h1>C Programming Files I/O</h1>
     <br>
     <p>
       In C programming, file is a place on disk where a group of related data is stored.<br><br>

       When the program is terminated, the entire data is lost in C programming. If you want to keep large volume of data, it is time consuming to enter the entire data. But, if file is created, these information can be accessed using few commands.<br><br>

There are large numbers of functions to handle file I/O in C language. In this tutorial, you will learn to handle standard I/O(High level file I/O functions) in C.
<br><br>

High level file I/O functions can be categorized as:
     <br><br>
     <ol list-style-type="1">
     <li>Text file</li>
     <li>Binary file</li>

     </ol>
    <br>

     
</p>

 

<h1>File Operations</h1>
<p>
  <pre>

1.Creating a new file
2.Opening an existing file
3.Reading from and writing information to a file
4.Closing a file

  </pre>
<br>
  <b>Working with file</b>
  <br><br>
  While working with file, you need to declare a pointer of type file. This declaration is needed for communication between file and program.<br><br>

  <pre>
    FILE *ptr;
  </pre>
  <br><br>
  <b>Opening a file</b>
  <br><br>
  Opening a file is performed using library function fopen(). The syntax for opening a file in standard I/O is:<br>

  <pre>
ptr=fopen("fileopen","mode")

For Example:
fopen("E:\\cprogram\program.txt","w"); 
  
/* --------------------------------------------------------- */
 E:\\cprogram\program.txt is the location to create file.   
 "w" represents the mode for writing.
/* --------------------------------------------------------- */
  </pre>
<br>
</p>
<p>
<b>Here, the program.txt file is opened for writing mode.<b>
<table>
  <tr>
  <th>File Mode</th>
  <th>Meaning of Mode</th>
  <th>During Inexistence of file</th>
  </tr><br>
   <tr>
  <td>r</td>
  <td>Open for reading.</td>
  <td>If the file does not exist, fopen() returns NULL.</td>
  </tr>
     <tr>
  <td>w</td>
  <td>Open for writing.</td>
  <td>If  the file exists, its contents are overwritten. If the file does not exist, it will be created.</td>
  </tr>
   <tr>
  <td>a</td>
  <td>Open for append. i.e, Data is added to end of file.</td>
  <td>If the file does not exists, it will be created.</td>
  </tr>
   <tr>
  <td>r+</td>
  <td>Open for both reading and writing.</td>
  <td>If the file does not exist, fopen() returns NULL. </td>
  </tr>
   <tr>
  <td>w+</td>
  <td>Open for both reading and writing.</td>
  <td>If  the file exists, its contents are overwritten. If the file does not exist, it will be created.</td>
  </tr>
   <tr>
  <td>a+</td>
  <td>Open for both reading and appending.</td>
  <td>If the file does not exists, it will be created.</td>
  </tr>
</table>
<br>
<br>
</p>

<p>
<br>

  <b>Closing a File</b>
  <br><br>
  The file should be closed after reading/writing of a file. Closing a file is performed using library function fclose(). <br>

  <pre>
    fclose(ptr); //ptr is the file pointer associated with file to be closed.
  </pre>
  <br>
  <b>The Functions fprintf() and fscanf() functions:</b>
  <br>
</p>
<p>
  The functions fprintf() and fscanf() are the file version of printf() and fscanf(). The only difference while using fprintf() and fscanf() is that, the first argument is a pointer to the structure FILE<br><br>

  <b>Writing to a file</b>
  <br>
  <pre>
#include < stdio.h >
int main()
{
   int n;
   FILE *fptr;
   fptr=fopen("C:\\program.txt","w");
   if(fptr==NULL){
      printf("Error!");   
      exit(1);             
   }
   printf("Enter n: ");
   scanf("%d", & n);
   fprintf(fptr,"%d",n);   
   fclose(fptr);
   return 0;
} 
  </pre>
<br>
</p>
<p>
This program takes the number from user and stores in file. After you compile and run this program, you can see a text file program.txt created in C drive of your computer. When you open that file, you can see the integer you entered.<br>
<br>

Similarly, fscanf() can be used to read data from file.<br><br>

<b>Reading from file</b>
<br><br>

<pre>
#include < stdio.h>
int main()
{
   int n;
   FILE *fptr;
   if ((fptr=fopen("C:\\program.txt","r"))==NULL){
       printf("Error! opening file");
       exit(1);         /* Program exits if file pointer returns NULL. */
   }
   fscanf(fptr,"%d",&n);
   printf("Value of n=%d",n); 
   fclose(fptr);   
   return 0;
}
  
</pre>
<br>
</p>
  
<p>
If you have run program above to write in file successfully, you can get the integer back entered in that program using this program.<br><br>

Other functions like fgetchar(), fputc() etc. can be used in similar way.<br><br>



<b>Binary Files</b><br><br>
Depending upon the way file is opened for processing, a file is classified into text file and binary file.<br><br>

If a large amount of numerical data it to be stored, text mode will be insufficient. In such case binary file is used.<br><br>

Working of binary files is similar to text files with few differences in opening modes, reading from file and writing to file.<br><br>

<b>Opening modes of binary files:</b><br>
Opening modes of binary files are rb, rb+, wb, wb+,ab and ab+. The only difference between opening modes of text and binary files is that, b is appended to indicate that, it is binary file.<br><br>

<b>Reading and writing of a binary file:</b><br>
Functions fread() and fwrite() are used for reading from and writing to a file on the disk respectively in case of binary files.<br><br>

Function fwrite() takes four arguments, address of data to be written in disk, size of data to be written in disk, number of such type of data and pointer to the file where you want to write.<br><br>

<pre>
  fwrite(address_data,size_data,numbers_data,pointer_to_file);


  Function fread() also take 4 arguments similar to fwrite() function as above.

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