@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <div class="property_list" id="privacy">
        <div class="propertyHeader">
            <div class="aboutnew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="ipt-title" style="text-align:center"><span> Stamp Duty Calculator </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutInfoMain">
                        <div class="data">
                            <h3><b>What is the stamp duty?</b></h3>
                            <div class="first">
                                <p>
                                    Stamp Duty Land Tax (SDLT) is a form of tax that is paid to the government when you
                                    purchase property or land, above a certain price threshold,
                                    in England or Northern Ireland. There are also equivalent taxes in <a target="_blank"
                                        href="https://www.gov.scot/policies/taxes/land-and-buildings-transaction-tax/">Scotland</a>
                                    and <a target="_blank" href="https://gov.wales/land-transaction-tax-guide">Wales</a>.
                                </p>

                            </div>
                            <h3><b> Why am I seeing more than one table of SDLT?</b></h3>
                            <div class="second">

                                <p>
                                    This is based on the property price. The SDLT will apply accordingly. Following the end
                                    of the full stamp duty holiday on 30th June 2021, a zero rate band of £250,000 is now in
                                    place from 1st July until the end of September 2021. This will return back to the normal
                                    threshold of £125,000 on 1st October 2021.
                                </p>

                            </div>
                            <h3><b>First time buyers need to pay stamp duty</b></h3>
                            <div class="thirt">

                                <p>Yes, if you’re a first-time buyer in England and Northern Ireland, you won’t pay any
                                    stamp duty tax on a property priced at or below £300,000.
                                </p>
                                <p>If you’re buying a property priced at or below £500,000, you won’t pay tax on the first
                                    £300,000, then pay 5% on the amount you spend between £300,000 and £500,000 and if it is
                                    above £500,000, the standard rates of stamp duty will apply and you will not be
                                    benefited with the first-time buyers’ relief.</p>

                            </div>
                            <h3><b>What stamp duty is payable in England and Northern Ireland?</b></h3>
                            <div class="thirt">

                                <p>
                                    If you purchase a property in England or Northern Ireland between 1st July and 30th
                                    September 2021 you don’t need to pay any stamp duty at or below £250,000.
                                </p>
                                <p>From 1st July to 30th September 2021, stamp duty will be payable at the following rates:
                                </p>

                                <table border=1 cellspacing=0 cellpadding=0 width=605
                                    style='width:6.3in;border-collapse:collapse;border:none'>
                                    <thead>
                                        <tr style='height:33.55pt'>
                                            <td style='border:solid #A1A1AC 1.0pt;background:#262637;padding:0in 4.5pt .75pt .25in;
                  height:33.55pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
                  margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Stamp duty tax band</span></p>
                                            </td>
                                            <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#262637;
                  padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
                  margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Normal rate</span></p>
                                            </td>
                                            <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#262637;
                  padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
                  margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Buying an additional
                                                        property</span></p>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
                 height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>Up to &pound;250,000</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>0%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>3%*</p>
                                        </td>
                                    </tr>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
                 height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>&pound;250,001 to &pound;925,000</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>5%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>8%</p>
                                        </td>
                                    </tr>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
                 height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>&pound;925,001 to &pound;1.5 million</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>10%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>13%</p>
                                        </td>
                                    </tr>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
                 height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>Over &pound;1.5 million</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>12%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
                 border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
                 0in;margin-left:0in;line-height:normal'>15%</p>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <p>If you are purchasing any further property, then stamp duty rate of 3% will be payable
                                    between £40,001 and £250,000.
                                <p>
                                <p>If you complete a property purchase from 1 October 2021, you don’t need to pay any stamp
                                    duty priced at or below £125,000
                                <p>
                                <p>From 1st October 2021, stamp duty will be charged at the following rates:
                                <p>

                                <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=605
                                    style='width:6.3inc;border-collapse:collapse;border:none'>
                                    <thead>
                                        <tr style='height:34.1pt'>
                                            <td style='border:solid #A1A1AC 1.0pt;background:#262637;padding:0in 4.5pt .75pt .25in;
               height:34.1pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
               margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Stamp duty tax band</span></p>
                                            </td>
                                            <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#262637;
               padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
               margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Normal rate</span></p>
                                            </td>
                                            <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#262637;
               padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                                <p class=MsoNormal align=center style='margin-right:0in;
               margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>Buying an additional
                                                        property</span></p>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tr style='height:34.1pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
              height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>Up to &pound;125,000</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>0%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>3%*</p>
                                        </td>
                                    </tr>
                                    <tr style='height:34.1pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
              height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>&pound;125,001 to &pound;250,000</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>2%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>5%</p>
                                        </td>
                                    </tr>
                                    <tr style='height:34.1pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
              height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>&pound;250,001 to&pound;925,000</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>5%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>8%</p>
                                        </td>
                                    </tr>
                                    <tr style='height:34.1pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
              height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>&pound;925,001 to &pound;1.5 million</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>10%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>13%</p>
                                        </td>
                                    </tr>
                                    <tr style='height:34.1pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
              height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>Over &pound;1.5 million</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>12%</p>
                                        </td>
                                        <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
              border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:34.1pt'>
                                            <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
              0in;margin-left:0in;line-height:normal'>15%</p>
                                        </td>
                                    </tr>
                                </table>
                                <p>For more updated information regarding Stamp duty you can visit <a target="_blank"
                                        href="https://www.gov.uk/stamp-duty-land-tax/residential-property-rates">gov.uk.</a>
                                    The amount of stamp duty payable on a property purchase will depend on the date that
                                    your purchase is completed.
                                <p>

                                <p>If you complete a property purchase in England or Northern Ireland between 1st July and
                                    30th September 2021</p>
                                <p><b>What are stamp duty rates in Wales?</b></p>
                                <p>Rates July 1st 2021 Land Transaction Tax (LTT tax) in Wales:</p>
                                <table border=1 cellspacing=0 cellpadding=0 width=605
                                style='width:6.3in;border-collapse:collapse;border:none'>
                                <thead>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;background:#83838d;padding:0in 4.5pt .75pt .25in;
              height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>PURCHASE PRICE OF PROPERTY</span></p>
                                        </td>
                                        <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#83838d;
              padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>STAMP DUTY RATE</span></p>
                                        </td>
                                        <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#83838d;
              padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>STAMP DUTY RATE FOR ADDITIONAL PROPERTIES</span></p>
                                        </td>
                                    </tr>
                                </thead>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>Up to £180,000</span></p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>0%</span></p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>4%</span></p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£180,001 upto £250,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>3.5%</span></p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>7.5%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£250,001 to £400,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>5%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>9%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£400,001 to £750,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>7.5%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>11.5%</p>
                                    </td>
                                </tr>

                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£750,001 to £1.5m</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>10%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>14%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>Over £1.5m</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>12%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>16%</p>
                                    </td>
                                </tr>
                            </table>






                                <br>
                                <p>In Wales stamp duty is called <a href="https://gov.wales/land-transaction-tax-guide">Land
                                        Transaction Tax</a>. There is no first-time buyer relief in Wales</p>
                                <p><b>What are the stamp duty rates in Scotland?</b></p>
                                <p>From 1st April, 2021 LBTT rates in Scotland:</p>



                                <table border=1 cellspacing=0 cellpadding=0 width=605
                                style='width:6.3in;border-collapse:collapse;border:none'>
                                <thead>
                                    <tr style='height:33.55pt'>
                                        <td style='border:solid #A1A1AC 1.0pt;background:#83838d;padding:0in 4.5pt .75pt .25in;
              height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>PURCHASE PRICE OF PROPERTY</p>
                                        </td>
                                        <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#83838d;
              padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>STAMP DUTY RATE</p>
                                        </td>
                                        <td style='border:solid #A1A1AC 1.0pt;border-left:none;background:#83838d;
              padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                            <p class=MsoNormal align=center style='margin-top:.25in;margin-right:0in;
              margin-bottom:0in;margin-left:0in;text-align:center;line-height:normal'><span lang=EN-GB
                                                    style='font-size:12.0pt;color:white'>STAMP DUTY RATE FOR ADDITIONAL PROPERTIES</p>
                                        </td>
                                    </tr>
                                </thead>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>Up to £180,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>0%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>4%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£180,001 upto £250,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>3.5%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>7.5%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£250,001 to £400,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>5%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>9%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£400,001 to £750,000</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>7.5%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>11.5%</p>
                                    </td>
                                </tr>

                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>£750,001 to £1.5m</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>10%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>14%</p>
                                    </td>
                                </tr>
                                <tr style='height:33.55pt'>
                                    <td style='border:solid #A1A1AC 1.0pt;border-top:none;padding:.75pt 4.5pt .75pt .25in;
             height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>Over £1.5m</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>12%</p>
                                    </td>
                                    <td style='border-top:none;border-left:none;border-bottom:solid #A1A1AC 1.0pt;
             border-right:solid #A1A1AC 1.0pt;padding:.75pt 4.5pt .75pt .25in;height:33.55pt'>
                                        <p class=MsoNormal style='margin-top:.25in;margin-right:0in;margin-bottom:
             0in;margin-left:0in;line-height:normal'>16%</p>
                                    </td>
                                </tr>
                            </table>





                               <br>
                                <p>First-time buyer relief in Scotland is £175,000. Stamp duty in Scotland is known as <a target="_blank" href="https://www.gov.scot/policies/taxes/land-and-buildings-transaction-tax/">‘Land and Buildings Transaction Tax’</a> (LBTT).</p>
                                <p><b>Stamp Duty will apply for non-residents</b><p>
                                <p>If you are not living in the United Kingdom and want to buy any property in in England or Northern Ireland than you have to pay extra 2% on top of the current stamp duty rates for properties price more than £40,000. This was introduced from 1st April 2021.</p>
                                <p><b>How do I pay stamp duty?</b><p>
                                    <p>You have 14 days after you complete on the purchase of a property to file a return to HMRC and pay any stamp duty that is due.</p>
                                    <p>Your solicitor or conveyancer will usually calculate and pay your stamp duty bill on your behalf. They will normally submit your return and pay the stamp duty on completion day, having collected the money from you in advance.</p>
                                    <p><b>Can I add stamp duty to my mortgage?</b><p>
                                     <p>If you can’t afford your stamp duty bill, then you have an option to borrow more on your mortgage to cover the tax bill. You simply need to calculate how much stamp duty you will owe and increase your mortgage borrowing to cover it.</p>
                                     <p>Be aware that you’ll pay interest on that additional borrowing, which over the average 25-year term of a mortgage can add up and adding your stamp duty to your mortgage will increase your higher interest rate if you purchase. </p>
                                     <p>A full list of stamp duty exemptions and reliefs are listed on the <a target="_blank" href="https://www.gov.uk/stamp-duty-land-tax/reliefs-and-exemptions?_ga=2.259023754.1067063879.1629051627-65857626.1629051627">HMRC website</a></p>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
