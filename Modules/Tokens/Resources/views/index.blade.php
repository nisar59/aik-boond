@extends('frontend.layouts.template') @section('content')
<!-- ============abt-01 Section  Start============ -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header bg-white">
                    <div class="row">
                        <h4 class="col-md-6">Tokens</h4>
                        <div class="col-md-6 text-right"> <a href="{{url('tokens/create')}}" class="btn btn-success">+</a> </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered" id="faqs" style="width:100%;">
                            <thead class="text-center bg-primary text-white">
                                <tr>
                                    <th><strong>Payment Method</strong></th>
                                    <th><strong>Fee Slip</strong></th>
                                    <th><strong>Token</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tokens as $token)
                                <tr>
                                    <th class="text-center">{{PaymentMethods($token->payment_method)}}</th>
                                    <th class="text-center"><img src="{{ url('images/token/'.$token->fee_slip) }}" height="50px" width="50px" alt="" />
                                    </th>
                                    <th class="text-center">{{ $token->token}}</th>
                                    <th class="text-center"> @if($token->status== 0)
                                        <button class="btn btn-success">Active</button>
                                        @else
                                        <button class="btn btn-danger">Used</button>
                                        @endif
                                    </th>
                                    <th class="text-center">{{$token->created_at->format('d,m, Y')}}</th>
                                    <th>
                                        @if($token->status== 1)
                                        <div class="text-center"><button class="btn btn-danger text-center">Used</button></div>
                                        @else
                                        <div class="text-center"><a href="{{ url('tokens/edit/'.$token->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    @endif
                                </th>
                            </tr> @empty
                            <tr>
                                <td colspan="6">No record found</td>
                            </tr> @endforelse </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection