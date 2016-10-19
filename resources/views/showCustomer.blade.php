@extends('layouts.admin')

@section('content')

                        <h3>Details about the customer <strong>{{ $customer[0]->name }}</strong> </h3>

                            <tr>
                                <!-- customer Name -->
                                <td class="table-text">
                                    <div>{{ $customer[0]->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $customer[0]->gouvernorat }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $customer[0]->tel }}</div>
                                </td>

                                <td class="table-text">
                                	<div>{{ $customer[0]->address }}</div>
							    </td>

                                <td class="table-text">
                                    <div><a href="{{ URL::to('customers/'.$customer[0]->id.'/edit') }}"  
                                        type="submit">Edit </a></div>
                                </td>

                                <td class="table-text">
                                    <div><a href="{{ URL::to('customers/'.$customer[0]->id.'/delete') }}"  
                                        type="submit">Delete </a></div>
                                </td>
                            </tr>


@endsection