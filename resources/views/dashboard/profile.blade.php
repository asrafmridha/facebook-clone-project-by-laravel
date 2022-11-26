@extends('dashboard')

@section('content')
    <div class="col-sm-6">
        <div class="text-center">
            @if(Auth::user()->image)
            
                <img class="img-circle"  src="{{ asset('user/'.Auth::user()->image) }}"height="200" width="300">

            @else

                <img class="img-circle"  src="{{ asset('user/doctor_3.jpg') }}"  height="200" width="300">

            @endif
            <br><br>
        </div>

        <table style="width:100%" class="table table-striped">
            <tr>
                <td><strong>First Name</strong></td>
                <td id="f_name">{{ Auth::user()->f_name }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="setField('f_name');">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td><strong>Last Name</strong></td>
                <td id="l_name">{{ Auth::user()->l_name }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="setField('l_name');">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td><strong>Birthday</strong></td>
                <td id="birthday">{{ Auth::user()->b_date }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="setField('birthday');">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td id="email">{{ Auth::user()->email }}</td>
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="setField('email');">
                        Edit
                    </button>
                </td>
            </tr>
        </table>
    </div>

    <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle"><b>Edit</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  method="POST" action="{{ route('userprofile.update',Auth::user()->id) }}">
                    <div class="modal-body">
                                {{-- @method('Put') --}}
                                @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4><label id="fld_name" class="pull-right"></label></h4>
                                    <input type="hidden" value="" name="fld_name" id="fld_name">
                                </div>
                                <div class="col-sm-12">
                                    <input  class="form-group" type="text"  id="fld_value" name="fld_value">
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

function setField(value){
    $("#fld_name").html(value.charAt(0).toUpperCase()+value.substr(1).toLowerCase());

     var fieldvalue=$('#'+value).html();
    //  console.log(fieldvalue);

    $('#fld_value').val(fieldvalue);
    $("#fld_name").val(value); 
    


    }
  
</script>