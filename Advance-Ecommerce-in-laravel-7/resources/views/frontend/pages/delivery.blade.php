@extends('frontend.layouts.master')

@section('title','Imphi || delivery')

@section('main-content')

<div class="about-us section" style="padding: 10px 0;margin-top: 25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-content">
                    <h3>Delivery <span> Policy </span></h3>
                    <p>
                        <span class="custom_ishan">1. General Information</span><br>
                        All orders are subject to product availability. If an item is not in stock at the time you place your order, we will notify you and refund you the total amount of your order, using the original method of payment. <br>
                        <br>

                        <span class="custom_ishan"> 2. Delivery Location</span><br>
                        Items offered on our website are only available for delivery to addresses in [India only]. [We also accept orders from international customers who are shipping to addresses in [India] only.] Any shipments outside of india are not available at this time. <br>
                        <br>
                        
                        <span class="custom_ishan"> 3. Delivery Time</span><br>
                        An estimated delivery time will be provided to you once your order is placed. Delivery times are estimates and commence from the date of shipping, rather than the date of order. Delivery times are to be used as a guide only and are subject to the acceptance and approval of your order.
                        <br>
                        Unless there are exceptional circumstances, we make every effort to fulfill your order within [15] business days of the date of your order. Business day mean Monday to Friday, except holidays.
                        <br>
                        Please note we do not ship on [Sundays].
                        <br>
                        Date of delivery may vary due to carrier shipping practices, delivery location, method of delivery, and the items ordered. Products may also be delivered in separate shipments.
                        <br>
                        <br>
                        
                        <span class="custom_ishan">4. Delivery Instructions</span><br>
                        [You can provide special delivery instructions on the check-out page of our website.]
                        <br>
                        <br>
                        
                        <span class="custom_ishan">5. Shipping Costs</span><br>
                        Shipping costs are based on the weight of your order and the delivery method. To find out how much your order will cost, simple add the items you would like to purchase to your cart, and proceed to the checkout page. Once at the checkout screen, shipping charges will be displayed.
                        <br>
                        Additional shipping charges may apply to remote areas or for large or heavy items. You will be advised of any charges on the checkout page.
                        <br>
                        Sales tax is charged according to the province or territory to which the item is shipped.
                        <br>
                        <br>
                        
                        <span class="custom_ishan"> 6. Damaged Items in Transport </span><br>
                        If there is any damage to the packaging on delivery, contact us immediately at [support@imphi.in].
                        <br>
                        <br>

                        <span class="custom_ishan">7. Questions</span><br>
                        If you have any questions about the delivery and shipment or your order, please contact us at [support@imphi.in].
                        <br>
                    </p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <br>
                <br>
                <br>
                    <div class="about-img overlay">
                        <img src="{{asset('backend\img\document.jpg')}}" alt="Documents Signup pic">
                    </div>
            </div>
        </div>
    </div>
</div>





@endsection
