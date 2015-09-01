<?php
$description = "1. By two o'clock the teacher (to examine) all the students. 2. On my way to school I (to remember) that I (to leave) my report at home. 3. All my friend; (to be) glad to hear that I (to pass) all the examinations successfully. 4. Poor Oliver (to lie) unconscious on the spot where Sikes (to leave) him. 5. He (to open) his eyes, (to look) around and (to try) to remember what (to happen) to him. 6. All the passengers (to see) at once that the old man (to travel) a great deal in his life. 7. By the time we (to come) to see him, he (to return) home. 8. During the holidays my friend (to visit) the village where he (to live) in his childhood. 9. When they (to enter) the hall, the performance already (to begin). 10. When I came home, my mother (to tell) me that she (to receive) a letter from grandfather. 11. Where you (to work) before you (to enter) the institute? 12. He (to study) French before he (to enter) the university. 13. Lanny (to say) that he (to get) his education in Cape Town. 14. The boy (to want) to act the main part in the play because he (to organize) the theatre. 15. Lanny (not to know) who (to attack) him in the darkness. 16. The girl (to be) glad that she (to find) a seat near the window. 17. Suddenly he (to remember) that he (not to ring) her up in the morning. 18. By the time the train (to reach) the city, he (to make) friends with many passengers. 19. When my uncle (to leave), he (to hurry) to the station to book a ticket. 20. She (to think) that Gert and Lanny (to quarrel).";

$answer = "1. The teacher had examined. 2. I remembered, I had left. 3. All my friends were, I had passed. 4. Poor Oliver lay, Sikes had left. 5. He opened, looked, tried, what had happened. 6. All the passengers saw, the old man had travelled. 7. We came, he had returned. 8. My friend visited, he had lived. 9.They entered, the performance had begun. 10. My mother told, she had received. 11. Where had you worked, you entered. 12. He had studied, he entered. 13. Lanny said, he had got. 14. The boy wanted, he had organized. 15. Lanny did not know, who had attacked. 16. The girl was, she had found. 17. He remembered, he had not rung. 18. The train reached, he had made. 19. My uncle had left, he hurried. 20. She thought, Gert and Lanny had quarrelled.";


$separator = '<sn>';

for($i = 50;$i >= 1;$i--)
{
	$description = str_replace($i.".",$separator,$description);
	$answer = str_replace($i.".",$separator,$answer);
}

$a_description = explode($separator,$description);
$a_answer = explode($separator,$answer);

$count = sizeof($a_description);

foreach($a_description  AS $key => $value)
{
	/*echo $key.')'. trim($value)." - ...";
	echo '<br>';
	echo $key.')'.trim($a_answer[$key]);
	echo '<br><br>';*/
	
	
	echo $key.')'. str_replace('(','... (',trim($value));
	echo '<br>';
	echo $key.')'.trim($a_answer[$key]);
	echo '<br><br>';
}
?>