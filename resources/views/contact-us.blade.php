@extends('layouts.site')

@includeIf('layouts.headers', ['company' => $company, 'page' => $page])

@section('cover-image')
    <style type="text/css" media="all">
        #feature {
            background-image: url('/images/{{ $page->cover_image }}');
        }
    </style>
@endsection

@section('page')
    <section>

        <div id="padding">
            <div class="">
                <span style="font-size:17px; font-weight:bold; ">{{ $company->name }} </span>
                <br />
                <span>
                    <span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span style="font-size:13px; ">: </span><span style="font-size:14px; ">{{ $company->phone }}</span>
                    <span style="font-size:13px; "><br /></span><span style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">: {{ $company->email }}</span>
                </span>
            </div>
            <br />

            <form action="{{ route("email.send") }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label>Name:</label> *<br />
                        <input class="form-control" type="text" required value="" name="name" size="40"/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>Email Address:</label> *<br />
                        <input class="form-control" type="email" required value="" name="email" size="40"/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label>How can we help you?</label> *<br />
                        <textarea class="form-control" name="message" required rows="8" cols="38"></textarea>
                    </div>

                    
                </div>
                    <input class="form-input-button" style="color: black" type="reset" name="resetButton" value="Reset" />
                    <input class="form-input-button" style="color: black" type="submit" name="submitButton" value="Submit" />
            </form>

            <br>

        </div>

    </section>
@endsection
