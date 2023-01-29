<!DOCTYPE html>
<html>
<head>
	<title>PPM</title>
	<style type="text/css">
		.p2 {
			text-align: left;
		}

		.ft2 {
			font: bold 19px 'Calibri';
			color: #4d4a4d;
			line-height: 23px;
		}

		body {
			font-family: DejaVu Sans, sans-serif;
			font-size: 81.25%;
			font-size: 10px;
		}

		.btn-work {
			display: inline-block;
			line-height: 20px;
		}

		.left {
			text-align: left;
		}

		#box {
			width: 100%;
			border: none;
		}

		#top {
			border-bottom: 3px solid #65003c;
			margin-top: 5px;
		}

		#bottom {
			border: 1px solid #65003c;
			padding: 5px;
			width: 100%;
			height: auto;
		}

		input {
			font-weight: bold;
			padding: 7px;
			border: 1px solid #65003c;
		}

		.u-border {
			border-bottom: 1px solid #4d4a4d;
			text-decoration: underline;
		}

		.td-num {
			width:4%;
		}

		.td-des {
			width: 48%;
		}

		.tab {
			border: 1px solid #65003c;
			padding: 5px;
		}

		.txt_color {
			color: #333332;
		}

		.box-border {
			border: 1px solid #65003c;
			color: #333332;
		}

		.box-width {
			width: 100%;
		}

		.box-height {
			height: 30px;
		}

		.heading-font {
			font-size: 14px;
		}

		.des-font {
			font-size: 9px;
		}
	</style>
</head>
<body>
<?php
$logo_url = $_SERVER['DOCUMENT_ROOT'].'/theme/assets/img/logo/logo_1.gif';
$type = pathinfo($logo_url, PATHINFO_EXTENSION);
$data = file_get_contents($logo_url);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<!-- Page 1 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="padding-top:15px;padding-bottom:5px;">
	<tr>
		<td class="txt_color" align="left" style="width:15.3%"></td>
		<td style="width:68%;">
			<table align="left" class="box-border" style="padding:5px;">
				<tr>
					<td class="txt_color box-height" align="left">
						<strong>Storage Area Lease Agreement</strong>
					</td>
					<td class="txt_color box-height" style="direction:rtl;" align="right">
						<strong> عـقـد إيــجار مساحـة تخزيـن </strong>
					</td>
				</tr>
			</table>
		</td>
		<td class="txt_color" style="direction: rtl;width:15%;"></td>
	</tr>
</table>
<table align="center"  width="760">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="120" align="left"><b>Contract Number:</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?php echo $contractResult['contract_number']; ?>
					</td>
					<td height="20" width="120" align="left"><b>رقم العقد:</b></td>
					<td height="20" width="100" align="right"><b>Issue Date:</b></td>
					<td height="20" width="135" class="box-border btn-work left">
						<?=getDateFormatted($contractResult['check_in'],'FdY'); ?>
					</td>
					<td height="20" width="105" align="right"><b>ر‬‫ا‬‫د‬‫ـ‬‫ص‬‫لإ‬ا‬خ‬ی‬ر‬ا‬ت‬ب:</b>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Property Name:</b></td>
					<td height="30" width="505" class="box-border btn-work left">
						<?php echo $contractResult['unit_name']; ?>
					</td>
					<td height="30" width="110" align="right"><b>إســــم العــقـار:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Building & Unit No.:</b></td>
					<td height="30" width="505" class="box-border btn-work left">
						<?php echo (isset($contractResult['erp_building_id']) && $contractResult['erp_building_id'] > 0) ? $contractResult['erp_building_id'].' & ': ''; ?><?php echo $contractResult['unit_key']; ?>
					</td>
					<td height="30" width="110" align="right"><b> إســــم العــقـار:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Storage Area:</b></td>
					<td height="30" width="505" class="box-border btn-work left">
						<?php echo $contractResult['storage_name']; ?>
						<?php echo (isset($contractResult['store_type']) && strlen($contractResult['store_type'])>0 )?'('.trim($contractResult['store_type']).')':''; ?>
					</td>
					<td height="30" width="110" align="right"><b> رقم المخزن:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Property LANDLORD:</b></td>
					<td height="30" width="505" class="box-border btn-work left">
						ALDAR PROPERTIES PJSC
					</td>
					<td height="30" width="110" align="right"><b> إسم مالك العقار:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Property Managed By:<br>First Party :</b></td>
					<td height="30" width="505" class="box-border left" style="display: inline-block;line-height: 30px;">
						PROVIS
					</td>
					<td height="30" width="110" align="right"><b>يدارالعقار من قبل:<br>طرف أول:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Name(s) of TENANT(S):<br>Second Party :</b></td>
					<td height="30" width="505" class="box-border left" style="display: inline-block;line-height: 30px;">
						<?php echo $contractResult['t_first_name']." ".$contractResult['t_last_name']; ?>
					</td>
					<td height="30" width="110" align="right"><b> إسم المســتأجر:<br>طرف ثاني:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="117" align="left"><b>Mobile:</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?php echo $contractResult['t_phone']; ?>
					</td>
					<td height="20" width="120" align="left"><b>الهاتف المتحرك:</b></td>
					<td height="20" width="120" align="right"><b>Tel (Work):</b></td>
					<td height="20" width="115" class="box-border btn-work left">
						<?php echo $contractResult['t_phone']; ?>
					</td>
					<td height="20" width="120" align="right"><b>رقم هاتف المكتب:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Tenant's Address:<br>(Fax/Email Address)</b></td>
					<td height="30" width="505" class="box-border left" style="display: inline-block;line-height: 30px;">
						<?php echo $contractResult['unit_name'].' / '.$contractResult['address'].' / '.$contractResult['t_phone']; ?>
					</td>
					<td height="30" width="110" align="right"><b>عنوان المستأجر:<br> (فاكس/بريد إلكتروني)</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="120" align="left"><b>Storage Number:</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?php echo $contractResult['storage_booking_number']; ?>
					</td>
					<td height="20" width="120" align="left"><b>رقم المخزن :</b></td>
					<td height="20" width="100" align="right"><b>Purpose of Use :</b></td>
					<td height="20" width="135" class="box-border btn-work left">
						<?php echo $contractResult['description'] ?>
					</td>
					<td height="20" width="105" align="right"><b> الغرض من استخدامالعقار :</b>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="30" width="117" align="left"><b>Term of the Tenancy Contract:</b></td>
					<td height="30" width="505" class="box-border btn-work left">
						<?php echo ($contractResult['duration'] > 12)? (floor(($contractResult['duration'] / 12)) .'Year(s) '. ($contractResult['duration']%12).'Month(s) ' ) : $contractResult['duration']." Month(s)"; ?>
					</td>
					<td height="30" width="110" align="right"><b> مدة عقد الإيجار:</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="120" align="left"><b>From:</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?=getDateFormatted($contractResult['check_in'],'FdY'); ?>
					</td>
					<td height="20" width="120" align="left"><b>من:</b></td>
					<td height="20" width="100" align="right"><b>To:</b></td>
					<td height="20" width="135" class="box-border btn-work left">
						<?=getDateFormatted($contractResult['check_out'],'FdY'); ?>
					</td>
					<td height="20" width="105" align="right"><b>إلى:</b>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="118" align="left"><b>Rent for the Period(in AED):</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?php echo $contractResult['current_rent']; ?>
					</td>
					<td height="20" width="120" align="left"><b> الإيجار للمدة:</b></td>
					<td height="20" width="100" align="right"><b>Rent per Annum (in AED)</b></td>
					<td height="20" width="133" class="box-border btn-work left">
						<?php echo $contractResult['rent']; ?>
					</td>
					<td height="20" width="105" align="right"><b>  قيمة الإيجار السنوي<br>(بالدرهم الإماراتي)</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table align="center"  width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="118" align="left"><b>VAT</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<?php echo $contractResult['vat_amount']; ?>
					</td>
					<td height="20" width="120" align="left"><b>ضريبه القيمالمضافه لمده الايجار</b></td>
					<td height="20" width="100" align="right"><b>VAT per Annum (in AED):</b></td>
					<td height="20" width="133" class="box-border btn-work left">
						<?php echo number_format(($contractResult['rent'] * TAX_P / 100),2); ?>
					</td>
					<td height="20" width="105" align="right"><b>ضريبه القيمه<br>المضافه.</b></td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<table width="760" style="padding-top:10px;padding-bottom:10px;">
	<tr>
		<td style="width:2%;"></td>
		<td class="txt_color" align="left" style="width:38%;"><b>A security deposit is to be paid on or before the signing of this agreement /of AED. In case of Renewal, earlier paid Security deposit will be carried forward.</b></td>
		<td style="width:15%;">
			<table align="left" class="box-border" style="width:100%;">
				<tr>
					<td class="txt_color box-height btn-work left">
						<span><?php echo $contractResult['deposit']; ?></span>
					</td>
				</tr>
			</table>
		</td>
		<td class="txt_color" style="direction: rtl;width:39%;text-align:right">
			<b> يدفــــــع مبلغ كضمــــان عند/ قبـــل توقيع هـــــذه الإتفاقية قدره/ درهــم:في حال تجديد العقد، المبلغ المدفوع كضمان سوف يتم إحتسابه مع العقد الجديد </b>
		</td>
		<td style="width:2%;"></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br>
<!-- Page 2 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="padding-top:10px;padding-bottom:10px;width:95%;">
	<tr>
		<td style="width:2%"></td>
		<td class="txt_color box-border" style="width:96%;" align="left"><b>The Parties agree that this Storage Area Lease Agreement is entered into as a result of and dependent on the Unit Lease Agreement described above. If the Unit Lease is terminated for whatever reason this Storage Lease Agreement shall be cancelled from the date of such termination and the Landlord shall be entitled to retake possession of the Storage Area without notice or court order.</b>
			<p style="direction: rtl;text-align:right"> اتفق الطرفان على أن عقد إيجار مساحات التخزين "المخزن" الماثل تمّ التوقيع عليه كنتيجة لعقد الإيجار الخاص بالوحدة المذكورة أعلاه، بحيث أنه في حال تمّ إلغاء عقد الإيجار الخاص بالوحدة لأي سبب من الأسباب يترتب عليه إلغاء وفسخ عقد إيجار مساحات التخزين الماثل اعتباراً من تاريخ فسخ عقد إيجار الوحدة، ويحق للمالك عندها استرجاع مساحات التخزين دون الحاجة لتوجيه إنذار للمستأجر أو إصدار حكم محكمة بهذا الشأن </p></td>
	</tr>
</table>
<table width="760" style="padding-top:10px;padding-bottom:10px;width:95%;">
	<tr>
		<td style="width:2%"></td>
		<td class="txt_color" style="width:50%;" align="left"><b>The Rent is payable in advance and is due in full on or before the signing of The enclosed Terms & conditions of this Tenancy Agreement is an integral part of this agreement.</b></td>
		<td class="txt_color" style="direction: rtl;width:47%;" align="right"><b>تدفـع قيمـة الإيجـار مقدمـاً ويستحـق المبلـغ كامـلاً قبـل توقيـع هـذه الإتفاقيـة. الشـروط المرفقــة مــع هــذا العقـد هـي جـزء لا يتجــزأ مـن هـذه الإتفاقيـة. </b></td>
	</tr>
</table>
<br><br>
<table align="center" width="760" style="padding-top:4px;padding-bottom:4px;">
	<tbody>
	<tr>
		<td>
			<table cellpadding="5" cellspacing="0">
				<tbody>
				<tr>
					<td height="20" width="110" align="left"><b>Landlord's <br>signature:</b></td>
					<td height="20" width="150" class="box-border btn-work left">
						<img width="50" src="<?php echo ROOT_PATH; ?>theme/provisUI/img/signature/sign.png" alt="Right" />
					</td>
					<td height="20" width="120" align="left"><b>تـوقيــع:<br>المـالك </b></td>
					<td height="20" width="100" align="right"><b>Tenant's <br>signature:</b></td>
					<td height="20" width="135" class="box-border btn-work left">

					</td>
					<td height="20" width="105" align="right"><strong>تـــوقيـــع<br>المستأجر:</strong>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<br><br>
<table width="760" style="width:100%;">
	<tr>
		<td>
			<table style="width:100%;" class="txt_color">
				<tr>
					<td class="txt_color" style="width:12%;" align="left"><b>Received by Tenant:</b></td>
					<td style="width:25%;" align="center">
						<table align="center" style="color:#333332;height:20px;width:100%;">
							<tr>
								<td class="txt_color" align="right" style="width:40%;vertical-align: middle;">
									<b>Definitions</b>
								</td>
								<td class="box-border" style="height:10px;width:30px;">
									<img src="<?php echo ROOT_PATH; ?>theme/provisUI/img/tick.png" alt="Signature" style="width:30px;padding-top:5px;">
								</td>
								<td class="txt_color" align="left" style="direction: rtl;" style="width:30%;font-size: 9px;">
									<b> موجبات المستأجر </b>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:25%;" align="center">
						<table align="center" style="color:#333332;height:20px;width:100%;">
							<tr>
								<td class="txt_color" align="right" style="width:40%;">
									<b>Tenant's Obligation</b>
								</td>
								<td class="box-border" style="height:10px;width:30px;">
									<img src="<?php echo ROOT_PATH; ?>theme/provisUI/img/tick.png" alt="Signature" style="width:30px;padding-top:5px;">
								</td>
								<td class="txt_color" align="left" style="direction: rtl;">
									<b>وجبات المستأجر  </b>
								</td>
							</tr>
						</table>
					</td>
					<td style="width:25%;" align="center">
						<table align="center" style="color:#333332;height:20px;width:100%;">
							<tr>
								<td class="txt_color" align="right">
									<b>Schedule</b>
								</td>
								<td class="box-border" style="height:10px;width:30px;">
									<img src="<?php echo ROOT_PATH; ?>theme/provisUI/img/tick.png" alt="Signature" style="width:30px;padding-top:5px;">
								</td>
								<td class="txt_color" align="left" style="direction: rtl;">
									<b>موجبات المستأجر</b>
								</td>
							</tr>
						</table>
					</td>
					<td class="txt_color" style="direction: rtl;width:8%;" align="right"><b>قام المستأجر بإستلام :</b></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br><br>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Page 3 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;margin: 0 auto;display: table;float: none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="color: #333332;margin: 0 auto;display: table;float: none;">
	<tr>
		<td class="heading-font"><strong><u>Terms and Conditions</u></strong></td>
		<td class="heading-font" align="right" dir="rtl" style="direction: rtl;padding-top:100px;">
			<b><u>الشروط والأحكام</u></b>
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font">The Parties agree that</td>
		<td class="des-font" align="right" dir="rtl" style="direction: rtl;">
			اتفق الطرفان على ما يلي:
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font">The lessor and/or the Management is not liable for any damages that may occur to the stored items due to a source inside the storage unit or the common areas. (E.g., Fire or water leakage).</td>
		<td class="des-font" align="right" dir="rtl" style="direction: rtl;">
			لا يتحمل المؤجر أو الإدارة مسؤولية أي أضرار قد تحدث للمواد المخزنة بسبب أي مصدر داخل وحدة التخزين أو المناطق المشتركة. على سبيل المثال لا الحصر ، بسبب نشوب حريق أو تسرب للمياه .
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font">Lessee is responsible for procuring an insurance policy to insure stored items against any damages that may occur for the duration of using the storage unit.</td>
		<td class="des-font" align="right" dir="rtl" style="direction: rtl;">
			يتحمل المستأجر مسؤولية شراء بوليصة تأمين لتأمين المواد المخزنة  ضد أي أضرار قد تحدث طوال فترة إستخدامه لوحدة التخزين.
		</td>
	</tr>
	<tr><td colspan="2" style="height:20px;"></td></tr>
	<tr>
		<td class="heading-font"><strong><u>Definitions</u></strong></td>
		<td class="heading-font" align="right" dir="rtl" style="direction: rtl;">
			<b class="u-border"> التعريفات </b>
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font">In this Agreement, unless the contrary definition appears:</td>
		<td class="des-font" align="right" dir="rtl" style="direction: rtl;">
			في هذا الاتفاقية، تحمل هذه التعريفات المعنى المقابل لها ما لم يخالف السياق ذلك:
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><strong class="u-border">"Agreement"</strong>means this storage area lease agreement, together with the Schedule, Appendix and initial Storage rules, if any, as it may be amended from time to time</td>
		<td class="des-font" align="right" dir="rtl">
			تتعديلها من وقت لآخرالمبدئية كما يتم<b class="u-border">"الاتفاقية"</b><br>
			تعني اتفاقية الإيجار لمساحات التخزين ،وجدول وأنظمة مساحات التخزينالمخازن
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><strong class="u-border">"Applicable Law"</strong>means the laws of the Emirate of Abu Dhabi and the federal laws of the United Arab Emirates, as applicable in the Emirate of Abu Dhabi.</td>
		<td class="des-font" align="right" dir="rtl">
			طبيقها في إمارة أبو ظبي:<b class="u-border">"القانون المطبق"</b><br>
			يعني قوانين إمارة أبو ظبي والقوانين الإتحادية لدولة الإمارات العربية المتحدة بحسب تطبيقها في
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Building"</b> means Tower of which the Storage Area forms a par</td>
		<td class="des-font" align="right" dir="rtl">
			والتي تعتبر مساحات  التخزين جزءا منها<b class="u-border">"لبناية"</b><br>
			وتعني  البرج
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Building Common Use Facilities"</b> means all those areas and facilities in the Building, which are not leased or intended to be leased by the Landlord to the Tenant or to any other tenant, but which are provided by the Landlord for the common use by the Tenant and other tenants and occupiers of the Building, and their visitors, including all walls, passages, service yards, entrances, courtyards, halls, toilets, stairways, lifts, fire escapes, car parking, storage, facilities, water and power connections, conduits, waste disposal and collection areas and any recreation amenities which the Landlord provides for the general use of the tenants of the Building.</td>
		<td class="des-font" align="right" dir="rtl">للمستأجرين بالبناية منها<b class="u-border">"مرافق الاستخدام المشترك للبناية "</b><br> وتعني كافة المساحات والمرافق بالبناية التي لم تؤجر ولا نية لتأجيرها من المؤجر للمستأجر أو لأي مستأجر آخر وهي المقدمة من المؤجر للاستخدام العام المشترك من المستأجر وغيره من المستأجرين وشاغلي البناية وزوارهم بما في ذلك كافة الجدران والممرات وساحات الخدمات والمداخل والساحات والأروقة والحمامات والسلالم والمصاعد ومخارج الطوارئ ومرافق ساحات انتظار السيارات والمخازن وتوصيلات المياه والكهرباء والقنوات ومناطق تجميع والتخلص من النفايات وأية مرافق للترفيه يوفرها المؤجر للاستخدام العام</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Deposit"</b> means the deposit listed in the Particulars, as may be called on by the Landlord pursuant to this Agreement.</td>
		<td class="des-font" align="right" dir="rtl"> موجب هذه الاتفاقية. منها<b class="u-border">"المقدم"</b><br> يعني المقدم الموضح من التفاصيل والذي ربما يطلب بواسطة المؤجر بلبرج  </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Indemnify"</b> means to indemnify against all actions, claims, demands and proceedings made by or against the Landlord and all costs, expenses, liabilities and losses incurred directly or indirectly by the Landlord and its professional advisors</td>
		<td class="des-font" align="right" dir="rtl"> أو مستشاريه الفنيين . منها<b class="u-border">"التعويض "</b><br>
			تعني تعويضا ضد كل الأعمال، المطالبات، والطلبات والإجراءات التي قام بها المؤجر لرفع الدعاوى أو الدعاوى التي رفعت ضده وجميع التكاليف والنفقات والالتزامات والخسائر المتكبدة بطريقة مباشرة أو غير مباشرة من قبل المؤجر </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Joint and Several Liability"</b> means that where the Tenant comprises more than one party, all the parties comprising the Tenant shall be jointly and separately liable for the payment of Rent, performance of all obligations, and all liabilities falling upon the Tenant during the Term of this Agreement, as well as any breach of this Agreement.</td>
		<td class="des-font" align="right" dir="rtl">خرق لهذا الاتفاق منها<b class="u-border">"المسؤولية المشتركة والمنفردة "</b><br> : تعني أنه في حالة وجود أكثر من طرف كمستأجر يعد جميع المذكور أسماؤهم كأطراف مستأجرة مسئولين مجتمعين ومنفردين عن دفع جميع مبالغ الإيجار، وأداء جميع الالتزامات التي تقع على المستأجرين خلال فترة الإيجار كما يعدون مسئولين عن أي   </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Landlord"</b> means a person or persons who at any relevant time owns, or has an interest in the Storage Area that gives them the right to possession of the Storage Area.</td>
		<td class="des-font" align="right" dir="rtl">خبما يعطيهم الحق في امتلاكه. منها<b class="u-border">"المؤجر "</b><br>
			: يعني الشخص أو الأشخاص الذين يمتلكون مساحات التخزين  أو لهم منفعة رسمية منه  </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Occupiers"</b> means the Tenant permitted to occupy and use the Storage Area, as listed in the Particulars.</td>
		<td class="des-font" align="right" dir="rtl"> كما هو موضح في التفاصيل منها<b class="u-border">"شاغلو العقار "</b><br>
			تعني االمستأجر  المسموح له بشغل  واستعمال مساحة التخزين منه  </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Particulars"</b> means the particulars of this Agreement as set out on page 1.</td>
		<td class="des-font" align="right" dir="rtl"> الصفحة الأولى<b class="u-border">"التفاصيل "</b><br>تعني تفاصيل الاتفاقية بالشكل الوارد في   </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Parties"</b> means the Landlord and the Tenant respectively, and references to "Party" shall be references to either one of them, as the context so applies.</td>
		<td class="des-font" align="right" dir="rtl">
			منهما بحسب ما يرد بالسياق<b class="u-border">"الطرفان "</b><br>
			: ويعنى بهما المؤجر والمستأجر على التوالي والإشارة بكلمة طرف تعني أيا
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Storage Area"</b> means the storage area as listed in the Particulars and described in the Appendix.</td>
		<td class="des-font" align="right" dir="rtl">
			تفاصيلها في الملحق.<b class="u-border">"مساحة التخزين "</b><br>
			يعني (الأماكن) المخصصة للتخزين المدرجة
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font">
			<b class="u-border">"Rent"</b> means the rent for the Storage Area as set out in the Particulars payable by the Tenant to the Landlord pursuant to the terms of this Agreement
		</td>
		<td class="des-font" align="right" dir="rtl">
			طبقا لشروط هذه الاتفاقية.لحق.<b class="u-border">"الإيجار "</b><br>
			يعني إيجار مساحات التخزين  كما هو موضح في التفاصيل والمدفوع من قبل المستأجر إلى صاحب العقار
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Tenant"</b>  means a person, or persons, who at any relevant time are entitled to occupy and use the Storage Area under the terms of this Agreement.</td>
		<td class="des-font" align="right" dir="rtl">
			بموجب أحكام هذه الاتفاقية .لحق.<b class="u-border">"المستأجر "</b><br>
			: الشخص أو الأشخاص الذين يحق لهم في أي وقت شغل واستعمال مساحات التخزين
		</td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td class="des-font"><b class="u-border">"Term"</b>  means, (subject to any earlier termination of same), the period of the tenancy as set out in the Particulars including any extensions or continuation following the Expiry Date (and where applicable, “Term” shall be deemed to incorporate any further extensions or continuation thereof).</td>
		<td class="des-font" align="right" dir="rtl">
			تمديدات أو استمرارية للمدة).لحق.<b class="u-border">"االمدة"</b><br>
			: تعني مدة إيجار العقار الموضحة في  التفاصيل، بالإضافة إلى أي تمديد أو استمرارية للمدة والتي ربما تظهر بتاريخ انتهاء هذه المدة (وحيثما يطبق، تشمل كلمة المدة أية
		</td>
	</tr>
</table>

<br><br><br><br><br><br><br><br><br><br>

<!-- Page 4 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="color: #333332;">
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1</b></td>
		<td valign="top" class="des-font" style="width:45%;"><b>TENANT'S OBLIGATIONS</b></td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"><b> التزامـــات المستأجـــر </b></td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant(s) agree(s) to the following:</td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> وافق المستأجر/المستأجرون على: </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">It shall have Joint and Several Liability for all obligations and liabilities pursuant to this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> أن يكونوا مسؤولين مجتمعين ومنفردين عن جميع الالتزامات بموجب هذه لاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">To pay the Rent, administration charges, fees and all other sums due to the Landlord as required by this Agreement, or otherwise on demand. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> سداد الإيجار والرسوم الإدارية، والنفقات وكل المبالغ المستحقة للمؤجر بموجب هذه الاتفاقية أو عند الطلب. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.3</b></td>
		<td valign="top" class="des-font" style="width:45%;">To pay all rates and taxes, levied on the Storage Area by federal or local government or municipalities. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> سداد جميع الرسوم والضرائب التي تفرض على مساحات التخزين من قبل الحكومة الاتحادية أو المحلية أو البلديات </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.3</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.4</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to carry on any formal or registered trade, business or profession at the Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم القيام بممارسة أية أعمال أو أنشطة تجارية غير رسمية أو غير مرخص لها في مساحات التخزين. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.4</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.5</b></td>
		<td valign="top" class="des-font" style="width:45%;">To keep the Storage Area in good condition excluding items properly recorded in any Schedule of Condition and to yield up the same on the expiry or earlier determination of this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;">المحافظة على مساحات التخزين المؤجرة بموجب هذا العقد ومحتوياتها بحالة جيدة، وإعادتها عند انتهاء هذا العقد إلى الحالة التي كانت عليها عند إبرام هذا العقد. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.5</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.6</b></td>
		<td valign="top" class="des-font" style="width:45%;">To permit the Landlord, its agents and employees at all reasonable hours to enter and inspect the Storage Area.</td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;">السماح للمؤجر، ممثليه و موظفيه الدخول لمعاينة مساحات التخزين في الأوقات المناسبة لذلك. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.6</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.7</b></td>
		<td valign="top" class="des-font" style="width:45%;">To be wholly responsible for and indemnify the Landlord against any loss, damage, death or injury caused to any person or property whether directly or indirectly due to any act, omission, or negligence of the Tenant, the Occupiers or the Tenant's or Occupier’s respective visitors. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> تحمل المسؤولية كاملة وتعويض المؤجر ضد أي خسارة أو ضرر أو وفاة أو إصابة تحدث لأي شخص أو الممتلكات سواء كان ذلك بطريق مباشر أو غير مباشر أو بسبب أي فعل أو تقصير أو إهمال من المستأجر، أو شاغل العقار أو زوارهم. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.7</b> </td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.8</b></td>
		<td valign="top" class="des-font" style="width:45%;">In respect of the use and occupation of the Storage Area, to insure the person, property and personal effects of the Tenant and Occupiers as well as their respective visitors and to indemnify the Landlord against all loss, death, injury, or damage to the Tenant, the Occupiers or the Tenant's or Occupier's respective visitors and/or their property. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> فيما يتعلق باستخدام وشغل مساحات التخزين ، تأمين الشخص و الملكية والممتلكات الشخصية الخاصة بالمستأجر وشاغل العقار وزوارهم، وتعويض المالك عن كل الخسائر، في الأرواح والإصابات او الأضرار التي ربما تلحق بالمستأجر أو شاغل العقار أو زوارهم و/ أو ممتلكاتهم. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.8</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.9</b></td>
		<td valign="top" class="des-font" style="width:45%;">To comply with any and all laws, ordinances, rules and orders of any and all governmental, municipal, quasi-governmental authorities and any other persons having authority over the Building relating to the cleanliness, use, occupancy, fire safety, security and general preservation of the Storage Area or the Building. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> الامتثال لأي وجميع القوانين والمراسيم والقواعد والأوامر الصادرة عن أي وجميع السلطات الحكومية والبلديات والسلطات شبه الحكومية أو غيرها من الأشخاص الذين لديهم سلطة على المنطقة السكنية والتي تؤثر على نظافة واستخدام وشغل العقار، السلامة من الحريق والسلامة العامة والأمن والحفاظ علي مساحات التخزين والمنطقة السكنية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.9</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.10</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to sublet or assign this Agreement or part with possession of the whole or any part of the Storage Area without the prior written approval of the Landlord </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم تأجير مساحات التخزين من أو التنازل عنه أو جزء منه لطرف ثالث بدون موافقة خطية مسبقة من المؤجر </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.10</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.11</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to do or permit or suffer to be done on the Storage Area or any part thereof anything which may cause damage or be or become a nuisance and annoyance to the Landlord or the occupiers of any adjoining or neighbouring Storage Area or the neighbourhood or any illegal or immoral act or any act which may vitiate any insurance policy of the Storage Area or the Building or which may cause the premium of any such policy to be increased. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم السماح أو التسبب في أي أمر في مساحات التخزين أو في أي جزء منه قد يتسبب في ضرر أو يصبح إزعاجا للمؤجر أو أي من شاغلي مساحات التخزين المجاورة أو الجوار أو يمثل فعلا غير أخلاقي أو غير قانوني قد يبطل وثيقة التأمين على مساحات التخزين أو على البناية أو قد يتسبب في زيادة قسط التأمين بالنسبة لهذه الوثيقة </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.11</b></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Page 5 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br>
<table width="760" style="color: #333332">
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.12</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to carry out any improvements or alterations to the Storage Area without the prior written approval of the Landlord. Upon the expiration or termination of the Term, improvements or alterations to the Storage Area consented to by the Landlord to the Tenant shall become the Landlord's property, without any payment of compensation, and if the Landlord so desires, the Tenant shall reinstate the Storage Area to its original condition at the Tenant's own cost. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم إجراء أي تحسينات أو تعديلات على مساحات التخزين من دون موافقة خطية مسبقة من المؤجر. عند انتهاء أو إنهاء مدة الإيجار تعتبر التحسينات أو التعديلات التي تمت على مساحات التخزين بموافقة المؤجر، ملك له ولن يقوم المؤجر بدفع أي تعويضات على ذلك، وإذا رغب المؤجر في ذلك يجب على المستأجر إعادة مساحات التخزين إلى حالته الأصلية قبل التعديل وعلى حسابه. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.12</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.13</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to decorate or suffer to permit to be decorated,  the Storage Area unless agreed in writing by the Landlord save that painting of the interior of the Storage Area is permitted provided that at the expiry of the Term  the Tenant delivers up the Storage Area in the original colours of decoration. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم وضع ديكورات او السماح بذلك داخل مساحات التخزين بدون الحصول على الموافقة الخطية من المؤجر فيما عدا الطلاء الداخلي لمساحات التخزين شريطة أن يتسلمه المؤجر عند نهاية مدة العقد بنفس لون طلائه الأصلي وعلى نفس ديكوراته الأصلية </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.13</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.14</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to keep or store or allow in the Storage Area any arms, ammunition, gunpowder, explosives or any hazardous or prohibited products. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم الحفاظ أو السماح بتخزين داخل مساحات التخزين أي أسلحة أو ذخائر أو بارود أو متفجرات أو أي من المنتجات المحظورة أو الخطرة. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.14</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.15</b></td>
		<td valign="top" class="des-font" style="width:45%;">To comply with and abide by all Building   rules and regulations issued by the Landlord (or such other person or manager from time to time of the Building having authority to do so). </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> الامتثال والالتزام بجميع قواعد ونظم المنطقة السكنية الصادرة من المؤجر (أو أي شخص آخر أو مدير العقار بالمنطقة السكنية لديه سلطة للقيام بذلك من حين لآخر </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.15</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.16</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to play any musical instrument or use any sound production equipment or television so as to cause annoyance or disturbance to the adjoining residents or any neighbouring Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم استخدام أية آلةة موسيقية أو استخدام أية معدات صوت أو تلفاز بشكل يسبب إزعاجا أو ضيقا للسكان المجاورين أو مساحات التخزين المجاورة </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.16</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.17</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to keep any pets or other animals in the Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم رعاية أي حيوانات أليفة أو حيوانات أخرى في مساحات التخزين </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.17</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.18</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to hang any washing, clothes or other articles in the Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم وضع أي غسيل أو ملابس أو أشياء أخرى في مساحات التخزين </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.18</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.19</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to place any goods ,refuse or articles on the Storage Area, or on any portion of the Building Common Use Facilities </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم وضع أي أشياء في أي من مساحات التخزين .أو أي جزء من المرافق العامة </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.19</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.20</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to remove or do anything that may cause damage to the Storage  Area without the prior written approval of the Landlord. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم إزالة أو إضافة كا ما يمكنه أن يسبب ضررا لمساحات التخزين بدون الموافقة الخطية المسبقة من المالك </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.20</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.21</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to use the Storage Area for any illegal or immoral purpose. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم استخدام مساحات التخزين لأية أغراض غير قانونية أو غير أخلاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.21</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.22</b></td>
		<td valign="top" class="des-font" style="width:45%;">To notify the Landlord or his agent immediately of any damage or disrepair to the Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إخطار المؤجر أو وكيله على الفور عن أي خلل أو ضرر يحدث لمساحات التخزين. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.22</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.23</b></td>
		<td valign="top" class="des-font" style="width:45%;">Not to suffer or permit the Storage Area to be left wholly vacant or unoccupied for a period of one month or more without the prior consent in writing of the Landlord. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> عدم السماح بترك مساحات التخزين خالية بالكامل لفترة تمتد لشهر أو أكثر بدون الحصول على الموافقة الخطية المسبقة من المالك </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.23</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>1.24</b></td>
		<td valign="top" class="des-font" style="width:45%;">To be responsible for its own safety and security whilst in the Storage Area or the Building.  The provision of security by the Landlord does not ensure safety and does not relieve the Tenant of his responsibility.  The Tenant must immediately report any issue that represents a safety concern to the Landlord. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يعد مسؤولا عن سلامته الشخصية خلال تواجده في مساحات التخزين أو البناء. توفير الأمن من قبل المؤجر لا يضمن السلامة ولا يعفي المستأجر من المسؤولية. ويجب على المستأجر إخطار المؤجر على الفور في حالة حدوث ما يعتبر مصدر قلق للسلامة. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>1.24</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>2</b></td>
		<td valign="top" class="des-font" style="width:45%;">If the Tenant fails to repair any damage caused to the Storage Area by the Tenant, the Landlord and its agents and workmen shall be entitled to enter into the Storage Area at reasonable times to repair such damage and the expenses thereof shall be paid by the Tenant to the Landlord on demand. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إذا اخفق المستأجر في إصلاح أي أضرار لحقت بمساحات التخزين بسبب المستأجر، يحق للمؤجر وممثليه وعماله الدخول لمساحات التخزين في أوقات معقولة لإصلاح هذا الضرر، ويقوم المستأجر بدفع تكاليف إصلاح الضرر للمؤجر عند الطلب. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>3</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Deposit shall be held by the Landlord as security for and in respect of the performance by the Tenant of all of the obligations of the Tenant in this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;">يحتفظ المؤجر بالمبلغ المودع كتأمين كضمان لالتزام المستأجر بأداء جميع التزاماته بموجب هذه الاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>3</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>3.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Deposit shall be refunded to the Tenant within fourteen (14) days of the expiry or sooner termination of this Agreement, subject to the Landlord's right to deduct any monies due to the Landlord under this Agreement from the Deposit. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يتم رد المبلغ المودع كتأمين للمستأجر خلال 14 يوما من انتهاء الاتفاقية أو في حالة تحديد انتهائها في تاريخ مبكر، مع مراعاة حق المؤجر في خصم أية مبالغ مستحقة له بموجب هذه الاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>3.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>3.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">In the event that the Landlord serves a notice on the Tenant confirming it has had recourse to the whole or part of the Deposit, the Tenant shall immediately on receipt of such notice pay to the Landlord an amount equal to the reduction in the Deposit specified in any such notice. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إذا ما قام المؤجر بإخطار المستأجر باستعماله لجزء أو كامل المبلغ المودع كتأمين، على المستأجر فورا عند تلقي هذا الإخطار أن يقوم بدفع مبلغا مساو للمبلغ المستعمل إلى المؤجر والذي تم التنويه عنه في الإخطار. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>3.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>4</b></td>
		<td valign="top" class="des-font" style="width:45%;">If the Tenant vacates or abandons the Storage Area without having paid the due Rent and is not reasonably traceable or the Tenant vacates or abandons the Storage Area without notifying the Landlord in circumstances reasonably indicating that the Tenant may not come back or may not come back within a reasonable time, then the Landlord shall have the right to re-enter and retake possession of the Storage Area and exercise a lien on all property and things belonging to the Tenant in or about the Storage Area to secure payment of the due Rent or any other monies reserved hereunder. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> في حالة قيام المستأجر بإخلاء أو هجر مساحات التخزين بدون دفع الإيجار المستحق عليه تحت ظروف غير مناسبة أو في حالة إخلاء المستأجرمساحات التخزين أو هجره دون إخطار المؤجر في ظروف معقولة مشيرا إلى أن المستأجر قد لا يعود في غضون فترة معقولة، يحق للمؤجر دخول مساحات التخزين واستعادة ملكية مساحات التخزين وممارسة حيازة جميع الممتلكات والأشياء الخاصة بالمستأجر لتأمين سداد الإيجار المستحق أو غيرها من الأموال المحجوزة أدناه. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>4</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>5</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant acknowledges it has received all of the necessary access keys to the Storage Area and agrees that: </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يقر المستأجر انه استلم كل ما يلزم مساحات التخزين من مفاتيح ويوافق على أنه: </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>5</b></td>
	</tr>
</table>
<br><br><br><br><br>
<!-- Page 6 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="color: #333332">
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>5.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant acknowledges and accepts that it may be liable to pay (at the Landlord’s discretion) the administration charges set out in the Schedule to this Agreement or such other administration charges as the Landlord reasonably determines from time to time. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يقر ويقبل المستأجر بأنه قد يكون مسؤولا عن دفع (على حسب رأي المؤجر) رسوم ا ادارية كما هو مبين في الجدول المرفق مع هذه الاتفاقية أو غير ذلك من الرسوم الإدارية المعقولة والتي يحددها المؤجر من وقت لآخر. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>5.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>5.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">a fee will be charged for each access key not returned upon vacating the Storage Area (such fee to be paid directly or deducted from the Deposit). </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> سيدفع رسما عن كل مفتاح لم يتم تسليمه عند إخلاء مساحات التخزين (يمكن دفع هذا المبلغ مباشرة للمؤجر أو يتم خصمه من مبلغ التأمين). </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b> 5.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>6</b></td>
		<td valign="top" class="des-font" style="width:45%;">All correspondence between the Parties and all notices under this Agreement shall be deemed to be properly served on either Party, if served personally, sent by registered mail or by facsimile to the addresses, or fax number (in the case of the Landlord), shown in the Particulars. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> جميع المراسلات التي تتم بين الطرفين وكذلك الإخطارات بموجب هذه الاتفاقية تعتبر مستلمه من الطرفين في حالة تم تسليمها باليد أو أرسلت بالبريد المسجل أو بالفاكس إلى عناوين الطرفين أو في حالة تم إرسالها إلى رقم فاكس المؤجر والموضح في بداية هذه الاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>6</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>7</b></td>
		<td valign="top" class="des-font" style="width:45%;">Amendments to this Agreement shall not be binding on the Parties unless made in writing and signed by both the Parties. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> لا تكون التعديلات على هذه الاتفاقية ملزمة للطرفين ما لم يتم ذلك خطيا ويتم توقيعها من الطرفين. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>7</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>8</b></td>
		<td valign="top" class="des-font" style="width:45%;">This Agreement shall be governed by the Applicable Law. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> تحكم هذه الاتفاقية بموجب القانون المطبق. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>8</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>9</b></td>
		<td valign="top" class="des-font" style="width:45%;">This Agreement shall remain in force until the Expiry Date (subject to earlier termination of the Term in accordance with this Agreement), and may be renewed for further terms only by the mutual consent of the Parties. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يستمر سريان هذا الاتفاق حتى تاريخ نهاية العقد (أو حتى الانهاء المبكر وفق شروط هذا العقد) وقد يجدد لمدد أخرى شريطة اتفاق الطرفين على ذلك </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>9</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>9.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">If either Party wishes to renew this Agreement, it shall notify the other Party in writing at least two (2) months prior to the Expiry Date. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إذا ما قرر أي من الطرفين تجديد هذا الاتفاق، عليه إخطار الطرف الآخر كتابة قبل تاريخ نهاية العقد بشهرين (2) </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>9.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>9.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">Acceptance of the Tenant’s notice to renew shall be solely at the discretion of the Landlord. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> قبول اخطار المستأجر بطلب التجديد يقرر بحسب رغبة المؤجر وحده </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>9.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>10</b></td>
		<td valign="top" class="des-font" style="width:45%;">Subject to clause 10.1, the Tenant shall be entitled to terminate this Agreement prior to the Expiry Date, without penalty, on each anniversary of the Commencement Date.  Such termination is subject to service of at least two (2) months’ prior written notice to the Landlord. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> طبقا للبند 10.1، يحق المستأجر إنهاء هذا الاتفاق قبل تاريخ انتهائه دون تعويض في الموعد المحدد كل عام من تاريخ البدء. ويخضع الإنهاء المماثل لتقديم إشعار قبل شهرين (2) على الأقل من الإنهاء إلى المؤجر. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>10</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>10.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant shall not be entitled to terminate this Agreement prior to the Expiry Date, as provided in Clause 10 above, in the event that any breach of the Tenant’s obligations under this Agreement exists at the date that such early termination is permissible. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> لن يحق للمستأجر أنهاء هذا الاتفاق وفق ما ورد بالبند 10 في حالة خرقه لأي من التزامات المستأجر بموجب هذا الاتفاق في تاريخ إمكانية القيام بذلك </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>10.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>10.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">For the avoidance of doubt, should the Tenant request termination of this Agreement at any other time other than in accordance with the provisions of clause 10 above, the Landlord shall not be obliged to agree such request.  As a condition of providing its approval to such request, the Landlord shall be entitled to levy the charges and retention as set out in the Schedule to this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> درءا لأي شك، في حالة طلب المستأجر إنهاء هذا الاتفاق في أي وقت آخر غير الوارد في البند 10 أعلاه، ليس على المؤجر أي التزام بالموافقة على مثل هذا الطلب، وشريطة موافقة المؤجر على هذا الطلب، يحق للمؤجر أن يفرض رسوما وأن يحتجز المبالغ التي لديه بالشكل الموضح بملحق هذا الاتفاق </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>10.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>11</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Landlord shall be entitled to terminate this Agreement under the following circumstances: </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يحق للمؤجر إنهاء هذه الاتفاقية في حالة: </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>11</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>11.1</b></td>
		<td valign="top" class="des-font" style="width:45%;">if any part of the Rent, service charge or any other sum due under this Agreement is at any time in arrears and unpaid for 21 days or more after the same has become due (whether demanded or not); or </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إذا لم يتم دفع أي جزء من الإيجار أو رسوم الخدمة أو أي مبلغ مستحق للمؤجر بموجب هذا الاتفاق وأصبح متأخر الدفع لمدة 21 يوما أو أكثر من تاريخ استحقاقه، (سواء كان مطلوبا أم لا)، أو </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>11.1</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>11.2</b></td>
		<td valign="top" class="des-font" style="width:45%;">if the Tenant at any time fails or neglects to perform and observe any of the terms of this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> في حالة أخفق المستأجر أو تجاهل أداء أو تطبيق أي من أحكام هذه الاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>11.2</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>12</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant shall indemnify the Landlord against all costs and expenses incurred by the Landlord in relation to the preparation and service of any notice relating to any breach by the Tenant of this Agreement, and, if the Tenant does not remedy it, the costs of remedying of such breach. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يعوض المستأجر المؤجر ضد جميع التكاليف والنفقات التي يتكبدها المؤجر فيما يتعلق بإعداد وتقديم أي إشعار بشأن أي إخفاق من جانب المستأجر لهذه الاتفاقية وفي حالة عدم إصلاح المستأجر لهذا الإخفاق أو في حالة عدم دفع المستأجر لتكاليف إصلاح الإخفاق. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>12</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>13</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant acknowledges and accepts that the Landlord may at any time transfer without the consent of the Tenant its reversionary interest in the Storage Area. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يقر المستأجر ويقبل بإمكانية قيام المؤجر في أي وقت من الأوقات، وبدون موافقة المستأجر، بتحويل مصالحه في مساحات التخزين . </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>13</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>14</b></td>
		<td valign="top" class="des-font" style="width:45%;">If any provision in this Agreement is held to be illegal, void, invalid or unenforceable for any reason, the legality, validity and enforceability of the remainder of this Agreement shall not be affected. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> إذا أصبح أي حكم من أحكام هذه الاتفاقية غير قانوني أو غير ملزم أو باطلا أو غير سارٍ أو غير قابل للتطبيق لأي سبب من الأسباب، فلن تتأثر قانونية أو صلاحية أو نفاذ باقي بنود الاتفاقية بذلك وستظل سارية ونافذة </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>14</b></td>
	</tr>
	<tr><td colspan="2" style="height:1px;"></td></tr>
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>15</b></td>
		<td valign="top" class="des-font" style="width:45%;">This Agreement and its terms shall be confidential to the Parties and the Tenant acknowledges and accepts that it shall not make or permit any announcement or publication to be made concerning this Agreement or its terms, either in whole or in part, or any comment or statement relating to this Agreement. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يجب أن تظل هذه الاتفاقية وشروطها سرية بالنسبة للطرفين. ويجب على المستأجر أن يقر ويقبل بعدم السماح أو الإعلان أو النشر لأي ما يتعلق باتفاقية الإيجار هذه أو شروطها سواء كليا أو جزئيا، أو أي تعليق أو بيان يتعلق بهذه الاتفاقية. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>15</b></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- Page 7 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="color: #333332">
	<tr>
		<td valign="top" class="des-font" style="width:5%;"><b>16</b></td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant acknowledges and accepts that it may be liable to pay (at the Landlord’s discretion) the administration charges set out in the Schedule to this Agreement or such other administration charges as the Landlord reasonably determines from time to time. </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:46%;"> يقر ويقبل المستأجر بأنه قد يكون مسؤولا عن دفع (على حسب رأي المؤجر) رسوم ا ادارية كما هو مبين في الجدول المرفق مع هذه الاتفاقية أو غير ذلك من الرسوم الإدارية المعقولة والتي يحددها المؤجر من وقت لآخر. </td>
		<td valign="top" class="des-font" align="right" style="width:5%;"><b>16</b></td>
	</tr>
</table>
<br><br>
<table width="760" style="width:100%;color:#333332;padding-bottom:10px;">
	<tr>
		<td style="width:30%;"></td>
		<td style="width:30%;">
			<div style="color:#333332; text-align: center;"><u><b>SCHEDULE</b></u>&nbsp;&nbsp;&nbsp; <u style="direction: rtl;" ><b>الجــــدول </b> </u></div>
		</td>
		<td style="width:30%;"></td>
	</tr>
</table>

<table  width="760"class="tab" border="1" style="width: 100%; color: #333332;border-collapse: collapse;">
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%; padding: 5px;">Fine for late renewal effective 10 days after the expiry of the lease agreement;</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 500</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">500 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> غرامة عن تأخير تجيدد عقد الإيجار وذلك بعد 10 أيام من تاريخ انتهاء عقد الإيجار </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%; padding: 5px;">Renewal / Administration fees</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 200</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">200 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> الرسوم الإدارية لتجديد عقد الإيجار </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%; padding: 5px;">Per dishonoured cheque plus all additional expenses, including legal expenses, incurred by the Landlord in connection with recovery of the amount of each dishonoured cheque;</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 500</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">500 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> على الشيك المرتجع الواحد مضافا إليها جميع النفقات الإضافية، بما فيها النفقات القانونية، التي يتحملها المؤجر فيما يتعلق باسترداد مبلغ كل شيك مرتجع. </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%; padding: 5px;">If the tenant requests to delay a cheque for maximum 15 days;</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 250</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">250 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> إذا أراد المستأجر تأجيل إيداع الشيك لمدة أقصاها 15 يوما </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%; padding: 5px;">If the tenant requests to delay a cheque for  16 days to one month at most;</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 500</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">500 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> إذا أراد المستأجر تأجيل إيداع الشيك لمدة من 16 يوما إلى شهر كحد أقصى </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" style="border: 1px solid #65003c; width: 40%;">If the tenant requests to replace a cheque with cash/cheque</td>
		<td class="des-font" style="border: 1px solid #65003c; width: 10%; text-align: center;">AED 100</td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 10%; text-align: center;">100 درهم </td>
		<td class="des-font" style="direction: rtl;border: 1px solid #65003c; width: 40%; text-align: right;"> إذا أراد المستأجر استبدال الشيك بمبلغ نقدي/شيك </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" colspan="2" style="border: 1px solid #65003c; width: 50%; padding: 10px; ">The tenant undertakes to pay the maximum increase ruled by the law upon the renewal of this contract as per the Emirates of Abu Dhabi law and regulations.</td>
		<td class="des-font" colspan="2" style="direction: rtl;border: 1px solid #65003c; width: 50%; text-align: right; padding: 10px;"> يتعهد المستأجر بدفع الحد الأقصى من الزيادة القانونية عند تجديد العقد وذلك حسب القوانين المعمول بها في إمارة أبوظبي. </td>
	</tr>
	<tr style="border: 1px solid #65003c;border-collapse: collapse;">
		<td class="des-font" colspan="2" style="border: 1px solid #65003c; width: 50%; padding: 10px; text-align: left;">All the above mentioned rates is exclusive of VAT</td>
		<td class="des-font" colspan="2" style="direction: rtl;border: 1px solid #65003c; width: 50%; text-align: right; padding: 10px;"> جميع الرسوم المذكورة اعلاه لا تشمل ضريبه القيمه المضافه </td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Page 8 -->
<table cellspacing="0" cellpadding="1" width="760" style="border:none;">
	<tr>
		<td style="width:52%;" class="txt_color">
                    <span style="line-height:5px;">
                        <p style="color: #808080;">Document No.: KHI-OA-F-014</p><br>
                        <p style="color: #808080;">Revision No.: 2.0</p><br>
                        <p style="color: #808080;">Effective Date: May 2020</p><br>
                        <h2 style="color: #9A9A99;">STORAGE AGREEMENT</h2>
                    </span>
		</td>
		<td style="width:50%;" align="right">
			<!--<img src="<?php echo WEB_IMG_URL; ?>theme/provisUI/img/logo-provis.png" alt="Logo" style="margin-bottom: 15px; width:170px;">-->
			<img src="<?php echo $logo_url; ?>" alt="Logo" style="margin-bottom: 15px; width:170px;">
		</td>
	</tr>
</table>
<br><br><br>
<table width="760" style="color: #333332;">
	<tr>
		<td valign="top" class="td-num des-font" style="width:3%;">1.</td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant shall, at the Tenant's cost, be responsible for obtaining all permits, consents, licenses and the like which are necessary for its use of the premises.</td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:50%;"> يلتزم المستأجر وعلى نفقته الخاصة باستصدار والحصول على الموافقة والتراخيص اللازمة لاستخدامها في العين المؤجرة. </td>
		<td valign="top" class="td-num des-font" align="right" style="width:3%;">1</td>
	</tr>
	<tr>
		<td valign="top" class="td-num des-font" style="width:3%;">2.</td>
		<td valign="top" class="des-font" style="width:45%;">The Tenant shall not - </td>
		<td valign="top" class="des-font" align="right" style="direction: rtl;width:50%;"> يحظر على المستأجر مايلي: </td>
		<td valign="top" class="td-num des-font" align="right" style="width:3%;">2</td>
	</tr>
</table>

<table width="760" style="color: #333332;">
	<tr>
		<td style="width:20%;"></td>
		<td style="width:80%;">
			<table style="margin-left:10px;">
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">a.</td>
					<td class="des-font" valign="top" style="width: 40%;">use or permit the premises to be used for any illegal or improper purpose;</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;"> استخدام أو استغلال العين المؤجرة لأي غرض غير قانوني أو يتعارض مع طبيعة العين المؤجرة. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.أ‌ </td>
				</tr>
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">b.</td>
					<td class="des-font" valign="top" style="width: 40%;">contravene or permit the contravention of any law or regulation in the UAE and all regulations made or deemed to be made thereunder and in force from time to time or the requirements of any competent authority and shall at all times comply therewith;</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;"> مخالفة أو السماح بمخالفة الأنظمة والقرارات المعمول بها في دولة الإمارات العربية المتحدة وأية أنظمة وقرارات يتم إصدارها بموجب هذه الأنظمة والتشريعات والتي يتم سنها من وقت لآخر من قبل الجهات والهيئات المختصة ويتعهد بالالتزام التام والدائم بها. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.ب‌  </td>
				</tr>
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">c.</td>
					<td class="des-font" valign="top" style="width: 40%;">do or omit to do or permit any act or omission which may be or become an annoyance, nuisance, disturbance, or hazard, or cause damage to any owner and/or occupier of neighbouring premises or property or to the public in general, or detract from the value or character of the premises;</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;"> القيام أو الامتناع عن القيام بأية تصرفات أو أفعال من شأن ذلك إحداث إزعاج أو اضطرابات أو الإلحاق بأضرار أو التعرض للمخاطر في حق البناية والملّاك والمستأجرين والوحدات المجاورة وشاغليها، وأية أفعال أخرى قد تؤثر على قيمة العين المؤجرة والإضرار بها. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.ت  </td>
				</tr>
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">d.</td>
					<td class="des-font" valign="top" style="width: 40%;">store or keep or permit the storage or keeping of any dangerous or hazardous substance or thing upon the premises without the prior written express consent thereto of the Landlord in each instance;</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;">تخزين أو الاحتفاظ بأية مواد خطيرة أو تشكل مصدر خطر على البناية والعين المؤجرة دون الحصول على الموافقة الخطية الصريحة المسبقة من قبل المؤجر. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.ث‌  </td>
				</tr>
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">e.</td>
					<td class="des-font" valign="top" style="width: 40%;">permit the floor loading capacity of the premises to be exceeded in any manner whatsoever;</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;"> السماح بتجاوز قدرة التحمّل الخاصة بأرضية مساحة التخزين بأي شكل من الأشكال. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.ج‌</td>
				</tr>
				<tr>
					<td class="des-font" valign="top" style="width:10%;text-align:right;">f.</td>
					<td class="des-font" valign="top" style="width: 40%;">permit squatting or human or animal occupation upon the premises,</td>
					<td class="des-font" valign="top" style="text-align:right;width:40%;direction: rtl;"> السماح بإشغال واستغلال مساحات التخزين المؤجرة كسكن لأي أشخاص أو إيواء أية حيوانات. </td>
					<td class="des-font" valign="top" style="width:10%;text-align:left;">.ح‌</td>
				</tr>
				<tr>
					<td style="height:50px;"></td>
				</tr>
			</table>
		</td>
		<td style="width:10%;"></td>
</table>
<br><br><br>

<table align="center" valign="center" width="760" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td align="left"height="20" width="70"></td>
		<td align="left"height="20" width="280">SIGNED<br><img src="<?php echo ROOT_PATH; ?>theme/provisUI/img/signature/sign.png" alt="Signature" style="width:90px;padding-top:5px;"><br>...........................................................</td>
		<td align="right"height="20" width="360"> وقع <br><img src="<?php echo ROOT_PATH; ?>theme/provisUI/img/signature/sign.png" alt="Signature" style="width:90px;padding-top:5px;"><br>.....................................................</td>
	</tr>
	<tr>
		<td align="left"height="20" width="70"></td>
		<td align="left"height="20" width="280">by, for and on behalf of, the <b>LANDLORD</b></td>
		<td align="right"height="20" width="360"> <b>المالك</b>بواسطة، لصالح وبالنيابة عن </td>
	</tr>
	<tr>
		<td align="left"height="20" width="70"></td>
		<td align="left"height="20" width="280">PRINT NAME:</td>
		<td align="right"height="20" width="360"  style="direction: rtl;"> الاسم:</td>
	</tr>
	</tbody>
</table>
<br><br><br>

<table align="center" valign="center" width="760" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
		<td class="des-font" align="left" height="20" width="70"></td>
		<td class="des-font" align="left" height="20" width="280">SIGNED ....................................................</td>
		<td class="des-font" align="right" height="20" width="360">وقع.............................................</td>
	</tr>
	<tr>
		<td class="des-font" align="left" height="20" width="70"></td>
		<td class="des-font" align="left" height="20" width="280">by, for and on behalf of, the <b>TENANT</b></td>
		<td class="des-font" align="right" height="20" width="360"> <b>االمستأجر</b> ببواسطة، لصالح وبالنيابة عن </td>
	</tr>
	<tr>
		<td class="des-font" align="left" height="20" width="70"></td>
		<td class="des-font" align="left" height="20" width="280">PRINT NAME:</td>
		<td class="des-font" align="right" height="20" width="360"  style="direction: rtl;"> الاسم:</td>
	</tr>
	</tbody>
</table>


</body>
</html>
