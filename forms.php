<!DOCTYPE html>
<html>
   <head>
      <title>In Sync and Social</title>
      <link rel='stylesheet' href='styles/all.css' />
      <meta charset='utf-8' />
   </head>

   <body>

      <?php include 'includes/headerandnav.php'; ?>

      <div id='intake'>
         <form method='post' action='submit.php' id='intake_form' novalidate>
            <ul>
               <li class='answer'><input type='text' name='answer1' id='answer1' placeholder='participant&#8217;s name' required/></li>

               <li class='answer'><input type='text' name='answer2' id='answer2' placeholder='age' required/></li>

               <li class='answer'><input type='text' name='answer3' id='answer3' placeholder='guardian&#47;caretaker' required/></li>

               <li class='answer'><input type='phone' name='answer4' id='answer4' placeholder='phone' required/></li>

               <li class='answer'><input type='email' name='answer5' id='answer5' placeholder='email' required/></li>

               <li class='answer'>
                  <select name='answer6' class='answer6' required>
                     <option value=''>group applied for</option>
                     <option value='sensory4-6'>Sensory-based social skills, ages 4-6</option>
                     <option value='lego5-7'>Lego, ages 5-7</option>
                     <option value='lego8-10'>Lego, ages 8-10</option>
                     <option value='social7-10'>Social skills, ages 7-10</option>
                     <option value='social11-18'>Social skills, ages 11-18</option>
                     <option value='social19+'>Social skills, ages 19+</option>
                  </select>
               </li>

               <li class='answer'><textarea name='answer7' id='answer7' cols='40' rows='3' placeholder='What do you hope to get out of therapy?' maxlength='140' required></textarea></li>

               <li class='answer_label'>Behavioral characteristics<br/>Select all that apply.<br/></li>
                  <input type='checkbox' name='answer7' class='answer7' value='cooperative'/> Cooperative
                  <input type='checkbox' name='answer7' class='answer7' value='restless'/> Restless <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='attentive'/> Attentive
                  <input type='checkbox' name='answer7' class='answer7' value='eye_contact'/> Poor eye contact <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='distracted'/> Easily distracted
                  <input type='checkbox' name='answer7' class='answer7' value='attention'/> Short attention <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='willing'/> Willing to try new activities
                  <input type='checkbox' name='answer7' class='answer7' value='withdrawn'/> Withdrawn <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='alone'/> Prefers to play alone
                  <input type='checkbox' name='answer7' class='answer7' value='aggressive'/> Aggressive behaviors <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='separation'/> Separation difficulties
                  <input type='checkbox' name='answer7' class='answer7' value='frustrated'/> Easily frustrated <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='impulsive'/> Impulsive
                  <input type='checkbox' name='answer7' class='answer7' value='stubborn'/> Stubborn <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='self-abusive'/> Self-abusive behavior
                  <input type='checkbox' name='answer7' class='answer7' value='tiptoes'/> Walks on tiptoes <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='startled'/> Startled by loud noises
                  <input type='checkbox' name='answer7' class='answer7' value='avoidance'/> Avoidance behavior <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='model'/> Imitates and follows a model
                  <input type='checkbox' name='answer7' class='answer7' value='nightmares'/> Frequent nightmares <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='textures'/> Aversions to certain textures
                  <input type='checkbox' name='answer7' class='answer7' value='sensitive'/> Sensitivities to light, sound, or people <br/>
                  <input type='checkbox' name='answer7' class='answer7' value='bites'/> Bites when excited or angry
                  <input type='checkbox' name='answer7' class='answer7' value='tantrums'/> Frequent tantrums <br/>

               <li class='answer_label'>Sensory motor skills development<br/>Select all that apply.</li>
                  <input type='checkbox' name='answer8' class='answer8' value='trips'/> Frequently trips on their own feet
                  <input type='checkbox' name='answer8' class='answer8' value='bumps'/> Frequently bumps into furniture, walls, or other people <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='unaware'/> Unaware of being touched or bumped unless done with force
                  <input type='checkbox' name='answer8' class='answer8' value='dirty'/> Unaware that face or hands are dirty, i.e. running nose, food on face <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='clumsy'/> Seems unsure of how to move their body; is clumsy and awkward
                  <input type='checkbox' name='answer8' class='answer8' value='motor'/> Has difficulty learning new motor tasks <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='moving'/> Is in constant motion
                  <input type='checkbox' name='answer8' class='answer8' value='chews'/> Chews on pens, straws, shirts, etc. <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='intheway'/> Frequently gets in everyone else's space
                  <input type='checkbox' name='answer8' class='answer8' value='tidy'/> Avoids messy play, i.e. fingerpainting, play-doh, mud, sand <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='food'/> Only eats certain foods or food textures
                  <input type='checkbox' name='answer8' class='answer8' value='clothing'/> Sensitive to clothing tags or textures <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='hair'/> Complains about having hair brushed
                  <input type='checkbox' name='answer8' class='answer8' value='teeth'/> Resists having teeth brushed <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='nails'/> Dislikes having fingernails trimmed
                  <input type='checkbox' name='answer8' class='answer8' value='barefoot'/> Refuses to walk barefoot <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='sleep'/> Has trouble falling or staying asleep
                  <input type='checkbox' name='answer8' class='answer8' value='fixated'/> Becomes fixated on a task and has difficulty changing to another <br/>
                  <input type='checkbox' name='answer8' class='answer8' value='swings'/> Is fearful of swings
                  <input type='checkbox' name='answer8' class='answer8' value='playground'/> Is fearful of slides or other playground structures <br/>

               <li class='answer_label'>Preferred activities<br/>Select all that apply.</li>
                  <input type='checkbox' name='answer9' class='answer9' value='tv'/> TV
                  <input type='checkbox' name='answer9' class='answer9' value='books'/> Books <br/>
                  <input type='checkbox' name='answer9' class='answer9' value='puzzles'/> Puzzles
                  <input type='checkbox' name='answer9' class='answer9' value='computer'/> Computers <br/>
                  <input type='checkbox' name='answer9' class='answer9' value='crafts'/> Crafts
                  <input type='checkbox' name='answer9' class='answer9' value='bubbles'/> Bubbles <br/>
                  <input type='checkbox' name='answer9' class='answer9' value='food'/> Eating
                  <input type='checkbox' name='answer9' class='answer9' value='cars'/> Cars <br/>
                  <input type='checkbox' name='answer9' class='answer9' value='music'/> Music
                  <input type='checkbox' name='answer9' class='answer9' value='playdoh'/> Play-Doh <br/>
                  <input type='checkbox' name='answer9' class='answer9' value='blocks'/> Blocks
               <input type='checkbox' name='answer9' class='answer9' value='potato'/> Mr. Potato Head

   </body>
</html>
