@if ($message = Session::get('success'))

    <div class="w3-container w3-green">

        <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove-circle"></span>
        </button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('danger'))

    <div class="w3-container w3-red">

        <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove-circle"></span>
        </button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('warning'))

    <div class="w3-container w3-yellow">

        <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove-circle"></span>
        </button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('info'))

    <div class="w3-container w3-blue">

        <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove-circle"></span>
        </button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($errors->any())

    <div class="w3-container w3-red">

        <button type="button" class="close" data-dismiss="alert"><span class="glyphicon glyphicon-remove-circle"></span>
        </button>

        Please check the form below for errors

    </div>

@endif