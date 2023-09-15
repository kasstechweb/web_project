<?php
    echo 'register';
?>

<div class="form_box">
    <form method="POST" action="{{ route('register') }}">
<!--        @csrf-->
        <div class="form_group"> <!-- Name -->
            <label for="name" class="@error('name') label-invalid@enderror form_label">Name: </label>
            <input id="name" type="text" class=" @error('name')input-invalid @enderror" name="name" value="" required autocomplete="name" />

            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form_group"> <!-- Email -->
            <label for="email" class="@error('email') label-invalid @enderror form_label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="@error('email') input-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Password -->
            <label for="password" class="@error('password') label-invalid @enderror form_label">{{ __('Password') }}</label>
            <input id="password" type="password" class=" @error('password') input-invalid @enderror" name="password" required />

            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Confirm Password -->
            <label for="password-confirm" class="form_label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="" name="password_confirmation" required />
        </div>
        <br />
        <div class="form_group"> <!-- Address st1-->
            <label for="address" class="form_label">Street Address: </label>
            <input id="address" type="text" class=" @error('address') input-invalid @enderror" name="address" value="{{ old('address') }}" required />
            @error('address')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Address st2 -->
            <label for="address2" class="form_label"> </label>
            <input id="address2" type="text" class=" @error('address2') input-invalid @enderror" name="address2" value="{{ old('address2') }}" />
            @error('address2')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Address city -->
            <label for="city" class="@error('city') label-invalid @enderror form_label">City: </label>
            <input id="city" type="text" class=" @error('city') input-invalid @enderror" name="city" value="{{ old('city') }}" required >
            @error('city')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Address State -->
            <label for="state" class="@error('state') label-invalid @enderror form_label">State: </label>
            <select name="state" id="state" class=" @error('state') input-invalid @enderror" required >
                <option value="">-- Select Region --</option>
                <option value="Perlis" @if(old('state') == 'Perlis') selected="selected" @endif>Perlis</option>
                <option value="Kedah" @if(old('state') == 'Kedah') selected="selected" @endif>Kedah</option>
                <option value="Perak" @if(old('state') == 'Perak') selected="selected" @endif>Perak</option>
                <option value="Pulau Pinang" @if(old('state') == 'Pulau Pinang') selected="selected" @endif>Pulau Pinang</option>
                <option value="Selangor" @if(old('state') == 'Selangor') selected="selected" @endif>Selangor</option>
                <option value="Melaka" @if(old('state') == 'Melaka') selected="selected" @endif>Melaka</option>
                <option value="Negeri Sembilan" @if(old('state') == 'Negeri Sembilan') selected="selected" @endif>Negeri Sembilan</option>
                <option value="Johor" @if(old('state') == 'Johor') selected="selected" @endif>Johor</option>
                <option value="Pahang" @if(old('state') == 'Pahang') selected="selected" @endif>Pahang</option>
                <option value="Terengganu" @if(old('state') == 'Terengganu') selected="selected" @endif>Terengganu</option>
                <option value="Kelantan" @if(old('state') == 'Kelantan') selected="selected" @endif>Kelantan</option>
                <option value="Sarawak" @if(old('state') == 'Sarawak') selected="selected" @endif>Sarawak</option>
                <option value="WP Labuan" @if(old('state') == 'WP Labuan') selected="selected" @endif>WP Labuan</option>
                <option value="Sabah" @if(old('state') == 'Sabah') selected="selected" @endif>Sabah</option>
                <option value="Kuala Lumpur" @if(old('state') == 'Kuala Lumpur') selected="selected" @endif>Kuala Lumpur</option>
                <option value="Putrajaya" @if(old('state') == 'Putrajaya') selected="selected" @endif>Putrajaya</option>
            </select>
            @error('state')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Address Postal -->
            <label for="postal" class="@error('postal') label-invalid @enderror form_label">Postal Code: </label>
            <input id="postal" type="text" class=" @error('postal') input-invalid @enderror" name="postal" value="{{ old('postal') }}" required >
            @error('postal')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group"> <!-- Phone -->
            <label for="phone" class="@error('phone') label-invalid @enderror form_label">Phone Number: </label>
            <input id="phone" type="text" class=" @error('phone') input-invalid @enderror" name="phone" value="{{ old('phone') }}" required >
            @error('phone')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form_group btns"> <!-- buttons -->
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            <button type="button" onclick="resetRegister()" class="btn btn-danger">Reset</button>
        </div>

    </form>
</div> <!-- end box -->
