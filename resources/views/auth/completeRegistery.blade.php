@extends('auth.master')

@section('content')
<div class="container mobile-screen-mock">
    <h2 class="center-align">Complete Registration</h2>
    <div class="row">
        <form class="col s12" id="register_form" method="POST" action="{{ route('storeRegistry') }}">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <select name="position_id">
                      <optiondisabled selected>Choose your option</optiondisabled>
                      @foreach ($positions as $position)
                      <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
                      @endforeach
                    </select>
                    <label>Materialize Select</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select name="skill_id">
                        <option disabled selected>Select Option 2</option>
                        @foreach ($skills as $skill)
                        <option value="{{ $skill['id'] }}">{{ $skill['name'] }}</option>
                            
                        @endforeach
                    </select>
                    <label>Option 2</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <p class="range-field">
                        <input name="skill_level" type="range" id="experience" min="0" max="100" step="10"/>
                    </p>
                    <label for="test5">Level of the skill</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>
            </div>

            <div id="socialMediaInputs">
                <div class="row">
                  <div class="input-field col s6">
                    <select class="browser-default" name="social_media[]" >
                      <option value="" disabled selected>Choose your social media</option>
                      <option value="facebook">Facebook</option>
                      <option value="twitter">Twitter</option>
                      <option value="instagram">Instagram</option>
                    </select>
                  </div>
                  <div class="input-field col s6">
                    <input name="social_link[]" placeholder="Social Media Link" type="text" class="validate">
                  </div>
                </div>
            </div>
            
            <div class="right-align">
                <button id="addMore" type="button" class="btn waves-effect waves-light">Add More</button>
            </div>              
            
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Complete Registration
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const labels = ['Beginner', 'Intermediate', 'Expert'];
  
    const range = document.getElementById('experience');
    const label = document.querySelector('label[for="experience"]');
    
    range.addEventListener('input', () => {
      const value = range.value;
      label.innerHTML = labels[value]; 
    });
</script>

<script>
    document.getElementById("addMore").addEventListener("click", function() {
      var socialMediaInputs = document.getElementById("socialMediaInputs");
      var firstRow = socialMediaInputs.getElementsByClassName("row")[0];
      
      var clonedRow = firstRow.cloneNode(true); // This will clone all child nodes as well
      
      // Clear the input and select fields in the cloned row
      clonedRow.getElementsByTagName("input")[0].value = '';
      clonedRow.getElementsByTagName("select")[0].selectedIndex = 0;
      
      // Append the cloned row to the end of #socialMediaInputs
      socialMediaInputs.appendChild(clonedRow);
    });
</script>
    

@endsection