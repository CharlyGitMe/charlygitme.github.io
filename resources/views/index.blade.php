<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    @vite('resources/css/app.css')
<script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
</head>
<body>
  <x-nav />
  <section id="about">
    <div class="grid grid-cols-1 md:grid-cols-2 mt-40 text-white">
      <div class="p-10 md:p-20">
        <x-name />
        <h6 class="text-2xl mt-6">No non-sense Fullstack Developer providing fast + secure websites for all types of businesses!</h6>
      </div>
  
    <div class="about-img">
      <div class="spacer layer2 flip"></div>
        <div class="svg-container flex relative" >
          <x-blob />
        </div>
      </div>
    </div>
    
  </section>

  <section id="skills" class="pt-20">
  <div class="mx-auto text-white">
    <h2 class="text-4xl text-center mt-20">"Coding is a piece of cake!"</h2>
    <h4 class="text-2xl text-center"> Hover over cake layers to view individual skills.</h4>
  </div>

    <div class="grid grid-cols-1 md:grid-cols-2">
    <x-cake />

    <div class="skills-txt text-center md:text-start my-auto text-white mb-20 pt-4 md:pt-20">
      <div class="section frontend text-2xl md:text-4xl">
        <h3>Frontend</h3>
        @foreach(['HTML', 'CSS', 'JS'] as $skill)
          <x-skills-image src="/images/{{ $skill }}_Logo.png" />
        @endforeach
      </div>

      <div class="section tools text-2xl md:text-4xl pt-4">
        <h3>Tools</h3>
        @foreach(['Git', 'TW', 'BS', 'VS', 'Livewire'] as $tool)
          <x-skills-image src="/images/{{ $tool }}_Logo.png" />
        @endforeach
      </div>

      <div class="section backend text-2xl md:text-4xl pt-4">
        <h3>Backend</h3>
        @foreach(['Laravel', 'mySQL', 'PHP'] as $backendSkill)
          <x-skills-image src="/images/{{ $backendSkill }}_Logo.png" />
        @endforeach
      </div>    
    </div>
  </div>
 </div>
</section>
@foreach ($projects as $project)
    <x-project-card
        :image="$project['image']"
        :title="$project['title']"
        :description="$project['description']"
        :githubLink="$project['githubLink']"
        :liveSiteLink="$project['liveSiteLink']"
    />
@endforeach

{{-- <section id="projects" class="py-16 mt-20">
    <div class="container mx-auto">
        <h2 class="text-4xl mb-8 text-white">Completed Projects</h2>

        Portfolio Items
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            Portfolio Item 1
            <div class="bg-zinc-700 p-6 rounded-lg shadow transition duration-300 ease-in-out transform hover:-translate-y-2">
                <img src="/images/PW_Site_1.png" alt="Project 1" class="mb-4 rounded-md">
                <h3 class="text-xl text-white font-semibold mb-2">Powerwin Automotive Website</h3>
                <p class="text-gray-200">Completely rebuilt the webpage of an Automotive business, which included building a blog app that has an admin login with fully-functional CRUD. This was my first website ever created.</p>
                <div class="flex mt-10 justify-center">
                  <a href="#" class="text-white">
                  <img class="w-20" src="/images/github.png" alt="">
                  <p class="mt-1">Source Code</p></a>
                  <a href="#" class="text-white ms-20">
                  <img class="w-32" src="/images/eye.png" alt="">
                  <p class="mt-4">View Live Site</p></a>
                </div>
                <a href="#" class="mt-4 inline-block text-yellow-400 hover:text-yellow-200">View Details</a>
            </div>

            Portfolio Item 2
            <div class="bg-zinc-700 text-white p-6 rounded-lg shadow-lg hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                <img src="/images/PW_Trade_2.png" alt="Project 2" class="mb-4 rounded-md">
                <h3 class="text-xl font-semibold mb-2">Powerwin Automotive Trade Site</h3>
                <p class="text-gray-200">Smaller scale website only accessible by verified Trade customers. Customers request access, an email gets sent to our team for the vetting process, then our admin creates an account using their emailed details. Creating the account automatically sends the login details to the customer. </p>
                <div class="flex mt-8 justify-center">
                  <a href="#" class="text-white">
                  <img class="w-20" src="/images/github.png" alt="">
                  <p class="mt-1">Source Code</p></a>
                  <a href="#" class="text-white ms-20">
                  <img class="w-32" src="/images/eye.png" alt="">
                  <p class="mt-4">View Live Site</p></a>
                </div>
            </div>

            Portfolio Item 3
            <div class="bg-zinc-700 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-2">
                <img src="/images/PW_Trade_1.png" alt="Project 3" class="mb-4 rounded-md">
                <h3 class="text-xl font-semibold mb-2 text-white">Project 3</h3>
                <p class="text-gray-200">Description of the project. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="mt-8 flex justify-center">
                  <a href="#" class="text-white">
                  <img class="w-20" src="/images/github.png" alt="">
                  <p class="mt-1">Source Code</p></a>
                  <a href="#" class="text-white ms-20">
                  <img class="w-32" src="/images/eye.png" alt="">
                  <p class="mt-4">View Live Site</p></a>
                </div>

            </div> --}}
        </div>
    </div>
</section>

<script>
function addHoverListener(svgContainerClass, hoverTextClass) {
  const svgContainer = document.querySelector(svgContainerClass);
  const hoverText = document.querySelector(hoverTextClass);

  svgContainer.addEventListener('mouseover', () => {
    hoverText.style.opacity = '1'; // Show the text
  });

  svgContainer.addEventListener('mouseout', () => {
    hoverText.style.opacity = '0'; // Hide the text
  });
}

addHoverListener('.top', '.frontend');
addHoverListener('.mid', '.tools');
addHoverListener('.bot', '.backend');
</script>

<script>
  const tween = KUTE.fromTo(
    '#blob1', 
    {path: '#blob1'},
    {path: '#blob2'},
    {repeat: 999, duration: 3000, yoyo: true}
  )
  tween.start()
</script>

</body>
</html>