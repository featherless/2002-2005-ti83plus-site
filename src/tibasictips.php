<?php require("topcode.txt");?>
TIBASIC tips
</b></font> 
</div>
</TD>
</TR>
<TR> 
<TD VALIGN="top" BGCOLOR="#FFFFFF">
<P><BR>
<CENTER>
<table border="0" width="95%">
<tr>
<td>
<font face="verdana" size="1" color="#000000">

I have been quite bored lately, because I'm running out of different programs
to make (my latest one was memory...) so now I've decided to start a page that
will give everyone tips on basic programming, things you need to watch out for,
and etc.  So here goes!<p>

<b>TIBASIC tips</b><p>

<b>Quotation marks: If anyone has ever told you that you NEEDED quotation
marks at the end of each line that starts with them, then they're wrong...in
most cases.  Below is a program giving an example of what I mean:<br>
<font size="3"><pre>
PROGRAM:A
ClrHome
Disp "Hello"
Output(4,1,"This is text")
Pause 
</pre></font>
Now first off, I myself would NEVER write a program like that, or I might shoot
myself for the amount of space I'm wasting, hehe, but I can't say I never did
write them like that.  But now, I'll show you the BETTER version of that,
saving 3 bytes of space (that doesn't seem like much, but if you think about
it, after you've written a program that's about 3000-4000+, then you could
essentially save a couple hundred bytes, which are now free to use somewhere
else.<br>
<font size="3"><pre>
PROGRAM:A
ClrHome
Disp "Hello
Output(4,1,"This is text
Pause 
</pre></font>
<hr>
Variables: Have you ever wanted to reset a variable to 0?  Do you do that a lot?
Well, this little trick will help you save off quite a few bytes from your program.
Normally, you'd go like this:<br>
<font size="3"><pre>
0-->A
</pre></font>
But you can also go like this, to save a byte:<br>
<font size="3"><pre>
DelVar A
</pre></font>
and that will accomplish the exact same thing!
<hr>
Testing: Now, I know almost for a fact that at least a few of you looking at this site
will have made a game where you use the arrow keys to move something over a few
spots, and this is probably what your program looked like (I'll do it on the home
screen for consistency's sake):<br>
<font size="3"><pre>
ClrHome
DelVar A
1-->B
1-->C
While A!=105
getkey-->A
If A!=0
Output(C,B,"      <- There's just a space there, if you can't see it :)
If A=24 and B>1
B-1-->B
If A=26 and B<16
B+1-->B
If A=25 and C>1
C-1-->C
If A=34 and C<8
C+1-->C
Output(C,B,"+
End
</pre></font>
If you will notice the != is the same as the not equal to thing on the calc, the equal
sign with the slash, the != is a c++ term, and easiest to use in HTML, hehe.
However, with this way of testing I'm going to show you, you can drastically increase
the speed of your program, AND save space, it's not every day you can do that!<br>
<font size="3"><pre>
1:  ClrHome
2:  DelVar A
3:  1-->B
4:  1-->C
5:  Output(C,B,"+
6:  While A!=105
7:  getkey-->A
8:  If A
9:  Output(C,B,"      <- There's just a space there, if you can't see it :)
10: B-(A=24 and B>1)+(A=26 and B<16-->B
11: C-(A=25 and C>1)+(A=34 and C<8-->C
12: Output(C,B,"+
13: End
</pre></font>
NOTE:  This code has been fixed, because there were some really bad typos in it.<br>
See? It went from 18 lines of code, down to about 13 lines, and also sped it up quite a
bit.  But, just imagine, with all the space you have just saved from that, you
can now add 6 more lines of code, and probably not see that much of a difference!
If you don't get how the above code is working, what it does is, for instance, I'll take
line 10 of the code as an example.  Where it says (A=24) (A=26), it's testing to see if the
user pressed either 24, or 26, and if he/she did either of those, it will add one to the
variable or subtract it, respectively.  Also, you can use this method to make the cursor
move multiple places too, just add the increment number before the parentheses.<p>

Note: the code above also checks to make sure that B and C don't go out of the screen
boundaries, otherwise you might get errors because you're trying to draw off-screen.
<p>
<?php require("bottomcode.txt");?>