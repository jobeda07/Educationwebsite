@extends('frontend.master')
@section('content')
    <section id="notice">
        <div class="container">
            <div class="row justify-content-center text-center pb-5">
                <div class="col-lg-11">
                    <h2 style="color: black; font-size: 40px; font-weight: bold; padding-bottom: 40px;"> Notice Lists</h2>
                    <table>
                        <tr style="background-color: #0b3f4a; color: white;">

                            <th style="width: 15px; ">SI</th>
                            <th style="text-align: center;">File/Content</th>
                            <th>Title</th>
                            <th>Publication Date</th>

                        </tr>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td><i class="fa-solid fa-file-pdf fa-2xl"></i></td>
                                <td><a href="{{ asset($item->notice_pdf) }}" download
                                        style="color:#fff;text-decoration:underline">{{ $item->title }}
                                        <span><i class="bi bi-download"
                                                style="color:red;font:bolder;font-size:20px;margin-left:8px !important"></i></span></a>
                                </td>
                                <td>{{ $item->created_at->format('F j, Y') }}</td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection()
