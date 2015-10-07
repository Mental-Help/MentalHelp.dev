<?php

class UserStoriesTableSeeder extends Seeder {

	public function run()
	{
		$userStory = new UserStory();

		$userStory->title 	  = 'Hi I’m Meghan and I’d like to help';
		$userStory->body  	  = 'Being an advocate is meaningful to me because mental health is a very important issue
								that is too easily ignored. I aim to be someone that anyone can talk to about anything.
								I am very passionate about helping people help themselves and I want to aid people in
								overcoming their battles.';
		$userStory->is_public = true;

		$userStory->profile_id = 3;

		If (!$userStory->save()) {
			$userStory->getErrors()->toArray();
		}

		$userStory = new UserStory();

		$userStory->title 	  = 'A New Hope';
		$userStory->body  	  = "In high school I struggled a lot with depression and anxiety. No one I knew at the time
								really understood that my pain was real and their solution was to put me in an institution.
								It made high school far more difficult than it would have been for a typical teen, let
								alone someone dealing with depression and anxiety. After high school, I convinced my
								parents to let me move away for college and I was able to connect with prople who actually
								understood what I was going through. I'll probably never be 'normal' and I may never have
								a 'perfect' day, but they are a lot easier now.";
		$userStory->is_public = true;

		$userStory->profile_id = 2;

		If (!$userStory->save()) {
			$userStory->getErrors()->toArray();
		}

		$userStory = new UserStory();

		$userStory->title 	  = 'Fear is the mind killer';
		$userStory->body  	  = 'I was raised by my grandparents and I always felt depressed and abandoned by my
								biological parents. Growing up I was always bullied and self-conscious because I didn’t
								have parents like everyone else. I contemplated running away from home several times,
								but I knew it would hurt my grandparents and I just couldn’t do that to them. As I got
								older I slowly came to terms with my unique situation. Today, I still do not have a
								relationship with my biological parents and I’m okay with it. I understand now that
								growing up with grandparents as parents was the best position I could have been in at
								the time.';
		$userStory->is_public = true;

		$userStory->profile_id = 1;

		If (!$userStory->save()) {
			$userStory->getErrors()->toArray();
		}
	}

}