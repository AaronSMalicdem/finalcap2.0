@extends('general')  @section('content')
    

<div class="container mt-2">
    <div class="row">
        {{-- main content --}}
        <div class="d-flex justify-content-center col-lg-10 pt-3 pb-3 mt-3 main-content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 ps-3 pe-3 pb-2 pt-1 rating-section">
                        <h4 class="col-lg-12 overall-rating">Overall Rating</h4>
                        <!-- STAR ICON -->
                        <div class="col-lg-12 star" style="
                            width: 200px; 
                            height: 200px; 
                            background: linear-gradient(to right, gold 60%, white 40%);
                            clip-path: polygon(
                                 50% 10%, 
                                 60% 35%, 
                                 90% 35%, 
                                 70% 55%, 
                                 80% 85%, 
                                 50% 70%, 
                                 20% 85%, 
                                 30% 55%, 
                                 10% 35%, 
                                 40% 35%
                             );
                             display: flex;
                             align-items: center;
                             justify-content: center;
                             font-size: 30px;
                             color: black;
                             font-weight: bold;
                             position: relative;
                        ">
                            4.6
                        </div>
                    
                        <!-- Reviews Text -->
                        <h5 class="col-lg-12 reviews" style="margin-top: 10px; color:#fff;">Based on 20 reviews</h5>
                        
                        <!-- Sample Chart -->
                        <div class="col-lg-12 sample-chart" style="margin-top: 20px;">
                            <div style="display: flex; align-items: center; margin: 5px 0;">
                                <span style="width: 20px; text-align: right; margin-right: 5px; color:#fff;">1</span>
                                <div style="height: 20px; background-color: yellow; width: 80%;"></div> <!-- 80% -->
                            </div>
                            <div style="display: flex; align-items: center; margin: 5px 0;">
                                <span style="width: 20px; text-align: right; margin-right: 5px; color:#fff;">2</span>
                                <div style="height: 20px; background-color: yellow; width: 60%;"></div> <!-- 60% -->
                            </div>
                            <div style="display: flex; align-items: center; margin: 5px 0;">
                                <span style="width: 20px; text-align: right; margin-right: 5px; color:#fff;">3</span>
                                <div style="height: 20px; background-color: yellow; width: 30%;"></div> <!-- 30% -->
                            </div>
                            <div style="display: flex; align-items: center; margin: 5px 0;">
                                <span style="width: 20px; text-align: right; margin-right: 5px; color:#fff;">4</span>
                                <div style="height: 20px; background-color: yellow; width: 90%;"></div> <!-- 90% -->
                            </div>
                            <div style="display: flex; align-items: center; margin: 5px 0;">
                                <span style="width: 20px; text-align: right; margin-right: 5px; color:#fff;">5</span>
                                <div style="height: 20px; background-color: yellow; width: 70%;"></div> <!-- 70% -->
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                                <span style="flex: 1; text-align: center; color:#fff;">1</span>
                                <span style="flex: 1; text-align: center; color:#fff;">2</span>
                                <span style="flex: 1; text-align: center; color:#fff;">3</span>
                                <span style="flex: 1; text-align: center; color:#fff;">4</span>
                                <span style="flex: 1; text-align: center; color:#fff;">5</span>
                            </div>
                        </div>
                    </div>
                    
                    
        
                    <!-- Comments Section 1 -->
                    <div class="col-lg-3 ">
                        <div class="comments-container">
                            <h4 class="comments-header">Comments</h4>
                            <div class="comments-content">
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Comments Section 2 -->
                    <div class="col-lg-3 ">
                        <div class="comments-container">
                            <h4 class="comments-header">Suggestions</h4>
                            <div class="comments-content">
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Comments Section 3 -->
                    <div class="col-lg-3 ">
                        <div class="comments-container">
                            <h4 class="comments-header">Complains</h4>
                            <div class="comments-content">
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <hr>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                                <p>Aaron - Student</p>
                                <p>I hope you are doing well. God bless us all. We can get through this.</p>
                                <p class="comments-date">10/27/2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="col-1"></div>

        
    </div>
</div>
@endsection

