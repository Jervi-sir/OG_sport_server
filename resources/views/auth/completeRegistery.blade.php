@extends('auth.master')

@section('content')
<div class="container mobile-screen-mock">
    <h2 class="center-align">Complete Registration</h2>
    <div class="row">
        <form class="col s12" id="register_form">
            <div class="row">
                <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      @foreach ($positions as $position)
                      <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
                          
                      @endforeach
                    </select>
                    <label>Materialize Select</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Select Option 2</option>
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
                        <input type="range" id="experience" min="0" max="100" step="10"/>
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
            <!-- Social media input -->
            <div class="input-field">
                <select>
                <option value="" disabled selected>Choose platform</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option> 
                <option value="instagram">Instagram</option>
                </select>
                <label>Select Platform</label>
            </div>

            <div class="input-field">
                <input type="text" id="social-username" />
                <label for="social-username">Username</label>
            </div>

            <!-- Add more button -->
            <button class="btn" type="button" id="add-social">Add another</button>

            
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
    const addBtn = document.getElementById('add-social');
    const container = document.querySelector('form');
  
    addBtn.addEventListener('click', () => {
      const select = document.querySelector('select').cloneNode(true);
      const input = document.getElementById('social-username').cloneNode(true);
      
      container.append(select);
      container.append(input);
    });
  </script>

@endsection