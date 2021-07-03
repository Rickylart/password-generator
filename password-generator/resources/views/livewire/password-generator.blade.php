<div>
    <div class="row">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-6 text-center">Select your type of password</h1>
                <p class="lead text-center">click to select</p>
                <hr class="my-2">
                {{-- <p>More info</p> --}}
                <p class="lead">
                    <div class="col-md-12">
                        <form>
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="inputName" class="col-sm-1-12 col-form-label">Select the type of password</label>
                                    <select wire:model="password" class="form-control" required>
                                        <option>Select</option>
                                        <option value="alph">Alphabalt Only</option>
                                        <option value="numeric">Numeric Only</option>
                                        <option value="mix">Mixed</option>
                                    </select>
                                    @error('password')
                                    <b class="text-danger">{{ $message }}</b>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputName" class="col-sm-1-12 col-form-label">Enter password length</label>
                                    <input type="number" wire:model="length" name="" class="form-control" id="" required>
                                    @error('length')
                                        <b class="text-danger">{{ $message }}</b>
                                    @enderror
                                 </div>
                                <div class="col-md-6">
                                    <br>
                                   <button wire:click.prevent="generate()" class="btn btn-md btn-outline-info" type="submit">Generate</button>
                                </div>
                            </div>
                            <br>
                            <fieldset class="form-group row">
                                <legend class="col-form-legend col-sm-1-12">Generated Password</legend>
                                <div class="col-sm-1-12">
                                    <h6 class="text-danger">{{ $generatedpwd }}</h6>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
