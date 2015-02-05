<?php

class GeneralTest extends TestCase {

	
	public function setUp()
	{
		parent::setUp();
		Artisan::call('migrate');
		Artisan::call('db:seed');

	}

	public function tearDown(){

		parent::tearDown();
		Artisan::call('migrate:reset');

	}

	public function testSeeder(){

		$this->assertEquals(Apero::all()->count(), 7);

	}


	public function testConnectAddEventFail(){

		
		$this->call('POST','connect',[
			'title' => 'testpost',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
            'status' => 'unpublish'
			]);


		$this->assertEquals(Apero::all()->count(), 7);

		$this->assertRedirectedTo('login');

	}

	public function testConnectAddEvent(){

		$user = new User(array(
			'username' => 'Antoine',
            'password' => Hash::make('Antoine'),
            'role' => 'admin',
            'status' => 'online',
            ));

		$this->be($user);

		$this->call('POST','connect',[
			'title' => 'testpost',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. ',
            'status' => 'unpublish'
			]);

		$result = Apero::find(8);

		$this->assertEquals(Apero::all()->count(), 8);

		$this->assertEquals('testpost', $result->title);

		
		
		
	}
	public function testRedirect(){
		
		$this->call('GET','connect');

		$this->assertRedirectedTo('login');
		
		
	}
	
	/*public function testDatabaseTesting(){

		$post = Post::all();
		var_dump($post);

		$this->assertEquals(2,$post->count());
		
	}
	/*
	public function testHomePage()
	{
		$this->call('GET','/');
		$this->assertViewHas('posts');
	}
	public function testHTMLHomePage()
	{
		//$crawler = $this->call('GET','/');
		//$h2 = $crawler->filter('h2');

		//$this->assertEquals(2, count($h2));
	}
	public function testRedirectedHome(){

		$this->call('POST','buy');
		$this->assertRedirectedToRoute('home', null, ['flash_message'=>'ok redirected']);
	}
	public function testFilePut(){

		File::shouldReceive('put')->once();
		$this->call('GET','file');
	}
	*/
}
