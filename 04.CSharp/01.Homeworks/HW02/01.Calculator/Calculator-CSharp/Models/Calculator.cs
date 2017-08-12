﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Calculator_CSharp.Models
{
    public class Calculator
    {
        public Calculator()
        {
            this.Result = 0;
        }
        public Decimal LeftOperand { get; set; }
        public Decimal RightOperand { get; set; }
        public String Operator { get; set; }
        public Decimal Result { get; set; }

    }
}