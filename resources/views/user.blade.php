<div>

   <h1>User page</h1>

   <h2>The username using double curly braces is : {{$name}}</h2>
   <h2><?php echo "The name of user using php tag is : ".$name; ?></h2>

   <h3>The sum of 10 and 20 using double curly braces is : {{10+20}}</h3>

   <h3>The random number using double curly braces is : {{rand()}}</h3>
   <h3><?php echo "The random number using php tag is ". rand(); ?></h3>
   
   <h3>The users are (using double curly braces) : {{implode(', ', $users)}}</h3>
   <h3><?php echo "The users are (using php tag) ". implode(', ', $users); ?></h3>

   <h3>The 2nd Person in people is (using double curly braces) : {{$users[1]}}</h3>
   <h3>The 3rd Person in people is (using php tag) : <?php echo $users[2];?></h3>
   
   <h3>The 2nd Person in people in uppercase letters is (using double curly braces) : {{strtoupper($users[1])}}</h3>
   <h3>The 3rd Person in people in sentence case letters is (using php tag) : <?php echo ucwords($users[2]);?></h3>
</div>
<div>
   <h1 style="color: red;">
      The name using foreach loop are :
      @foreach($users as $user)
         {{$user}}
      @endforeach
   </h1>
</div>

<div>
   @if($name == 'Raja')
         <h2>The name is Raja</h2>
   @elseif($name == 'Raju')
         <h2>The Name is Raju</h2>
   @else
         <h2>The Name is neither Raja nor Raju.</h2>
   @endif
</div>

<div>
   @for($i=0; $i<count($users); $i++)
         <h2>
            {{$users[$i]}}
         </h2>
   @endfor
</div>