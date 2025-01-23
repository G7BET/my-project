function CalConv() {
FIRSTYEAR = 1998;
LASTYEAR = 2032;
today = new Date();
SolarYear = today.getFullYear();
SolarMonth = today.getMonth() + 1;
SolarDate = today.getDate();
Weekday = today.getDay();
LunarCal = [new tagLunarCal(27, 5, 3, 43, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1), new tagLunarCal(46, 0, 4, 48, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1), new tagLunarCal(35, 0, 5, 53, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 1), new tagLunarCal(23, 4, 0, 59, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1), new tagLunarCal(42, 0, 1, 4, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1), new tagLunarCal(31, 0, 2, 9, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 1, 0), new tagLunarCal(21, 2, 3, 14, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1), new tagLunarCal(39, 0, 5, 20, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1), new tagLunarCal(28, 7, 6, 25, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 1), new tagLunarCal(48, 0, 0, 30, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1), new tagLunarCal(37, 0, 1, 35, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1), new tagLunarCal(25, 5, 3, 41, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1), new tagLunarCal(44, 0, 4, 46, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1), new tagLunarCal(33, 0, 5, 51, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1), new tagLunarCal(22, 4, 6, 56, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0), new tagLunarCal(40, 0, 1, 2, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0), new tagLunarCal(30, 9, 2, 7, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1), new tagLunarCal(49, 0, 3, 12, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1), new tagLunarCal(38, 0, 4, 17, 1, 0, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0), new tagLunarCal(27, 6, 6, 23, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1), new tagLunarCal(46, 0, 0, 28, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 0), new tagLunarCal(35, 0, 1, 33, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0), new tagLunarCal(24, 4, 2, 38, 0, 1, 1, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1), new tagLunarCal(42, 0, 4, 44, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1), new tagLunarCal(31, 0, 5, 49, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0), new tagLunarCal(21, 2, 6, 54, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1), new tagLunarCal(40, 0, 0, 59, 0, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1), new tagLunarCal(28, 6, 2, 5, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0), new tagLunarCal(47, 0, 3, 10, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1), new tagLunarCal(36, 0, 4, 15, 1, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1), new tagLunarCal(25, 5, 5, 20, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0), new tagLunarCal(43, 0, 0, 26, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1), new tagLunarCal(32, 0, 1, 31, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0), new tagLunarCal(22, 3, 2, 36, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0)];
SolarCal = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
SolarDays = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334, 365, 396, 0, 31, 60, 91, 121, 152, 182, 213, 244, 274, 305, 335, 366, 397];
AnimalIdx = ["马", "羊", "猴", "鸡", "狗", "猪", "鼠", "牛", "虎", "兔", "龙", "蛇"];
LocationIdx = ["南.", "東.", "北.", "西."];
if (SolarYear <= FIRSTYEAR || SolarYear > LASTYEAR) return 1;
sm = SolarMonth - 1;
if (sm < 0 || sm > 11) return 2;
leap = GetLeap(SolarYear);
if (sm == 1) d = leap + 28;
else d = SolarCal[sm];
if (SolarDate < 1 || SolarDate > d) return 3;
y = SolarYear - FIRSTYEAR;
	acc = SolarDays[leap * 14 + sm] + SolarDate;
	kc = acc + LunarCal[y].BaseKanChih;
	Kan = kc % 10;
	Chih = kc % 12;
	Location = LocationIdx[kc % 4];
	Age = kc % 60;
	if (Age < 22) Age = 22 - Age;
	else Age = 82 - Age;
	Animal = AnimalIdx[Chih];
	if (acc <= LunarCal[y].BaseDays) {
		y--;
		LunarYear = SolarYear - 1;
		leap = GetLeap(LunarYear);
		sm += 12;
		acc = SolarDays[leap * 14 + sm] + SolarDate
	} else LunarYear = SolarYear;
	l1 = LunarCal[y].BaseDays;
	for (i = 0; i < 13; i++) {
		l2 = l1 + LunarCal[y].MonthDays[i] + 29;
		if (acc <= l2) break;
		l1 = l2
	}
	LunarMonth = i + 1;
	LunarDate = acc - l1;
	im = LunarCal[y].Intercalation;
	if (im != 0 && LunarMonth > im) {
		LunarMonth--;
		if (LunarMonth == im) LunarMonth = -im
	}
	if (LunarMonth > 12) LunarMonth -= 12;
	today = new Date();
	function initArray() {
		this.length = initArray.arguments.length
		for (var i = 0; i < this.length; i++) this[i + 1] = initArray.arguments[i]
	}
	var d = new initArray("<span color=#FF0000><b>星期日.</b></span>", "<span color=#FF0000><b>星期一.</b></span>", "<span color=#FF0000><b>星期二.</b></span>", "<span color=#FF0000><b>星期三.</b></span>", "<span color=#FF0000><b>星期四.</b></span>", "<span color=#FF0000><b>星期五.</b></span>", "<span color=#FF0000F><b>星期六.</b></span>");
	document.writeln("<span color=#3333CC><b>今:</b></span><span color=#FF0000><b>", today.getMonth() + 1, "</b></span><span color=#3333CC><b>月</b></span><span color=#FF0000><b>", today.getDate(), "</b></span><span color=#3333CC><b>日.</b></span>", d[today.getDay() + 1], "");
	document.writeln("<span color=#3333CC><span class=d><b>农历:</b></span><span color=#FF0000><b>" + LunarMonth + "</b><span color=#3333CC><b>月</b></span><b>" + LunarDate + "</b><span color=#3333CC><b>日.</b></span></span>");
	document.writeln("<span class=d><span color=#3333CC><b>煞</b></span><b><span color=#FF0000>" + Location + " </span></b><span color=#3333CC><b>正冲生肖:</b></span><b><span color=#FF0000>" + Animal + "</span></b></span><br>");
	return 0
}
function GetLeap(year) {
	if (year % 400 == 0) return 1;
	else if (year % 100 == 0) return 0;
	else if (year % 4 == 0) return 1;
	else return 0
}
function tagLunarCal(d, i, w, k, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13) {
	this.BaseDays = d;
	this.Intercalation = i;
	this.BaseWeekday = w;
	this.BaseKanChih = k;
	this.MonthDays = [m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13]
}

function www_helpor_net()
{
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
if(minutes<=9)
minutes="0"+minutes
if(seconds<=9)
seconds="0"+seconds
myclock="<span><b>"+hours+":"+minutes+":"+seconds+"  </b></span>"
if(document.layers){document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}else if(document.all)
liveclock.innerHTML=myclock
setTimeout("www_helpor_net()",1000)
}
www_helpor_net();
CalConv();