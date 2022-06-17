-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2022 г., 17:13
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aragorn7`
--
CREATE DATABASE IF NOT EXISTS `aragorn7` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `aragorn7`;

-- --------------------------------------------------------

--
-- Структура таблицы `1060_parameter`
--

CREATE TABLE `1060_parameter` (
  `Id_1060_Parameter` int NOT NULL,
  `Name_1060` varchar(255) DEFAULT NULL,
  `parameters_1060` varchar(255) DEFAULT NULL,
  `Max_x_list_1060` varchar(255) DEFAULT NULL,
  `Max_y_list_1060` varchar(255) DEFAULT NULL,
  `Technological_Pruning_1060` varchar(255) DEFAULT NULL,
  `Printed_indentation_at_the_top_1060` int DEFAULT NULL,
  `Printed_indentation_at_the_left_1060` int DEFAULT NULL,
  `Printed_indentation_at_the_right_1060` int DEFAULT NULL,
  `Printed_indentation_at_the_bottom_1060` int DEFAULT NULL,
  `The_cost_of_printing_an_impression` int DEFAULT NULL,
  `Percentage_mark_up_of_the_technical_process` int DEFAULT NULL,
  `Max_cost_of_the_impression` int DEFAULT NULL,
  `Min_cost_of_the_impression` int DEFAULT NULL,
  `Circulation_threshold_for_minimum_cost` int DEFAULT NULL,
  `black_coefficient` int DEFAULT NULL,
  `Turnover_cost_ratio` int DEFAULT NULL,
  `Cost_of_adjustment_sheets` int DEFAULT NULL,
  `Coefficient _of_the_ number_of _adjustment_sheets` double DEFAULT NULL,
  `Number_of_adjustment_sheets_when_printing_urn_of_the_sheet` int DEFAULT NULL,
  `Get_into_color_option` int DEFAULT NULL,
  `Minimum_order_cost` int DEFAULT NULL,
  `price_start_1060` int DEFAULT NULL,
  `Lunch_time` time DEFAULT NULL,
  `Print_time` time DEFAULT NULL,
  `Chroma` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `access_rights`
--

CREATE TABLE `access_rights` (
  `Id` int NOT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Access code` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `access_rights`
--

INSERT INTO `access_rights` (`Id`, `Post`, `Access code`) VALUES
(1, 'Директор', 1),
(2, 'Менеджер', 1),
(3, 'Производство', 0),
(4, 'Бухгалтер', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `accounting_of_printed_sheets`
--

CREATE TABLE `accounting_of_printed_sheets` (
  `Id_printed_sheets` int NOT NULL,
  `Start_datetime` datetime DEFAULT NULL,
  `Opening_counter` int DEFAULT NULL,
  `Finish_datetime` datetime DEFAULT NULL,
  `Closing_datetime` datetime DEFAULT NULL,
  `Id_managers` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `calculation_paid`
--

CREATE TABLE `calculation_paid` (
  `Id_сalculation_paid` int NOT NULL,
  `DateTimeCalculation_paid` datetime NOT NULL,
  `FinallySum` int NOT NULL,
  `VirtualSum` int NOT NULL,
  `InvoiceDate` date NOT NULL,
  `InvoiceNumber` int NOT NULL,
  `PaymentAmount` int NOT NULL,
  `OrderMarginPercentage` int NOT NULL,
  `OrderMarginInteger` int NOT NULL,
  `financial_cell_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `calculation_paid`
--

INSERT INTO `calculation_paid` (`Id_сalculation_paid`, `DateTimeCalculation_paid`, `FinallySum`, `VirtualSum`, `InvoiceDate`, `InvoiceNumber`, `PaymentAmount`, `OrderMarginPercentage`, `OrderMarginInteger`, `financial_cell_id`) VALUES
(1, '2022-06-16 10:00:15', 32000, 33000, '2022-06-16', 32165498, 40000000, 100, 1000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `Id_Client` int NOT NULL,
  `Name_client` varchar(255) DEFAULT NULL,
  `Logdin_client` varchar(255) DEFAULT NULL,
  `Password_client` varchar(255) DEFAULT NULL,
  `Mail_client` varchar(255) DEFAULT NULL,
  `Phone_client` varchar(255) DEFAULT NULL,
  `ContactPerson` varchar(255) DEFAULT NULL,
  `Phone_ContactPerson` varchar(255) DEFAULT NULL,
  `Contractor` varchar(255) DEFAULT NULL,
  `Id_Discount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`Id_Client`, `Name_client`, `Logdin_client`, `Password_client`, `Mail_client`, `Phone_client`, `ContactPerson`, `Phone_ContactPerson`, `Contractor`, `Id_Discount`) VALUES
(1, 'Karti', 'Karti', '123', 'Karti@mail.ru', '899999999999', 'Sergey', '8999955559999', '11', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `design_operation`
--

CREATE TABLE `design_operation` (
  `Id_design_operation` int NOT NULL,
  `Start_date_Doperation` date DEFAULT NULL,
  `Finish_date_Doperation` date DEFAULT NULL,
  `Id_managers` int NOT NULL,
  `Self_esteem` double DEFAULT NULL,
  `Estimated_amount` double DEFAULT NULL,
  `Sum_fact` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `discound`
--

CREATE TABLE `discound` (
  `IdDiscound` int NOT NULL,
  `Dis_1060` tinyint(1) DEFAULT NULL,
  `Dis_3080Long` tinyint(1) DEFAULT NULL,
  `Dis_KM951_A4` tinyint(1) DEFAULT NULL,
  `Dis__KM951_A3` tinyint(1) DEFAULT NULL,
  `Dis_Mimaki` tinyint(1) DEFAULT NULL,
  `Dis_Summa` tinyint(1) DEFAULT NULL,
  `Dis_PostPress` tinyint(1) DEFAULT NULL,
  `Dis_Grechiha` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `discound`
--

INSERT INTO `discound` (`IdDiscound`, `Dis_1060`, `Dis_3080Long`, `Dis_KM951_A4`, `Dis__KM951_A3`, `Dis_Mimaki`, `Dis_Summa`, `Dis_PostPress`, `Dis_Grechiha`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `financial_cell`
--

CREATE TABLE `financial_cell` (
  `financial_cell_id` int NOT NULL,
  `account_name_fin` varchar(255) DEFAULT NULL,
  `current_number` int DEFAULT NULL,
  `BIC` int DEFAULT NULL,
  `correspondent_account` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `financial_cell`
--

INSERT INTO `financial_cell` (`financial_cell_id`, `account_name_fin`, `current_number`, `BIC`, `correspondent_account`) VALUES
(1, 'Касса', 88995566, 323256652, 951195198);

-- --------------------------------------------------------

--
-- Структура таблицы `managers`
--

CREATE TABLE `managers` (
  `Id_managers` int NOT NULL,
  `Name_manager` varchar(255) DEFAULT NULL,
  `Login_manager` varchar(255) NOT NULL,
  `Password_manager` varchar(255) DEFAULT NULL,
  `Mail_manager` varchar(255) DEFAULT NULL,
  `Phone_manager` varchar(255) DEFAULT NULL,
  `id_access` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `managers`
--

INSERT INTO `managers` (`Id_managers`, `Name_manager`, `Login_manager`, `Password_manager`, `Mail_manager`, `Phone_manager`, `id_access`) VALUES
(1, 'Артифакт', 'Artyfakt', '1234567', 'artyfakt@list.ru', '89999999999', 1),
(2, 'Alsu', 'Alsu', '123', 'AlsuAppalonova@yandex.ru', '89172992282', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `name_price_range`
--

CREATE TABLE `name_price_range` (
  `Id_Name_Price_range` int NOT NULL,
  `name_Name_Price_range` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `operations`
--

CREATE TABLE `operations` (
  `Id_operation` int NOT NULL,
  `Id_Orders` int NOT NULL,
  `Execution_Status` varchar(255) DEFAULT NULL,
  `Id_Tex_Process` int NOT NULL,
  `Id_Subcontracting` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `operation_1060`
--

CREATE TABLE `operation_1060` (
  `id_operation_1060` int NOT NULL,
  `Start_date_operation` date DEFAULT NULL,
  `Finish_date_operation` date DEFAULT NULL,
  `Id_managers` int NOT NULL,
  `Self_esteem` int DEFAULT NULL,
  `Estimated_amount` double DEFAULT NULL,
  `Sum_fact` int DEFAULT NULL,
  `X_size_operation` int DEFAULT NULL,
  `Y_size_operation` int DEFAULT NULL,
  `Circulation` double DEFAULT NULL,
  `Chroma_Operation` varchar(255) DEFAULT NULL,
  `Blids` tinyint(1) DEFAULT NULL,
  `Felds` tinyint(1) DEFAULT NULL,
  `MyPaper` tinyint(1) DEFAULT NULL,
  `Id_Cost_sheet` int NOT NULL,
  `Number_circulation_sheets_set` double DEFAULT NULL,
  `Number_adjustment_sheets_calculated` double DEFAULT NULL,
  `Number_circulation_sheets_fact` double DEFAULT NULL,
  `Estimated_amount_paper` double DEFAULT NULL,
  `Estimated_cut_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders_args`
--

CREATE TABLE `orders_args` (
  `Id_Orders` int NOT NULL,
  `Date_Order` date DEFAULT NULL,
  `Date_Done_Order` date DEFAULT NULL,
  `Id_Order_status` int NOT NULL,
  `Id_Client` int NOT NULL,
  `Id_managers` int NOT NULL,
  `Name_Order` varchar(255) DEFAULT NULL,
  `Comment_order` varchar(255) DEFAULT NULL,
  `Path_order` text,
  `Id_сalculation_paid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders_args`
--

INSERT INTO `orders_args` (`Id_Orders`, `Date_Order`, `Date_Done_Order`, `Id_Order_status`, `Id_Client`, `Id_managers`, `Name_Order`, `Comment_order`, `Path_order`, `Id_сalculation_paid`) VALUES
(1, '2022-06-15', '2022-06-16', 10, 1, 1, 'Книги А3', 'Книги про животных.', '\\\\SERVER\\Work\\_DEVELOP\\Виноградов\\2022_06_15 презенташки', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `Id_Order_status` int NOT NULL,
  `Condition_orders` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`Id_Order_status`, `Condition_orders`) VALUES
(1, 'Расчет'),
(2, 'Design'),
(3, 'PrePress'),
(4, 'Press'),
(5, 'PostPress'),
(6, 'Упаковка'),
(7, 'Изготовлено'),
(8, 'Доставка'),
(9, 'СТОП'),
(10, 'Готово!');

-- --------------------------------------------------------

--
-- Структура таблицы `paper`
--

CREATE TABLE `paper` (
  `Id_paper` int NOT NULL,
  `Name_paper` varchar(255) DEFAULT NULL,
  `Id_paper_type` int NOT NULL,
  `X_size_paper` int DEFAULT NULL,
  `Y_size_paper` int DEFAULT NULL,
  `Paper_density` int DEFAULT NULL,
  `Thickness` int DEFAULT NULL,
  `Id_Price_range` int NOT NULL,
  `Сoefficient_cheating` double DEFAULT NULL,
  `Two_sides` tinyint(1) DEFAULT NULL,
  `Sheet_roll` tinyint(1) DEFAULT NULL,
  `Permanent` tinyint(1) DEFAULT NULL,
  `Number_sheets_stock` int DEFAULT NULL,
  `Number_remaining_sheets` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `paper_type`
--

CREATE TABLE `paper_type` (
  `Id_paper_type` int NOT NULL,
  `name_paper_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `price_range`
--

CREATE TABLE `price_range` (
  `Id_Price_range` int NOT NULL,
  `ID_Name_Price_range` int NOT NULL,
  `Price_kg` int DEFAULT NULL,
  `Date_recording` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subcontracting`
--

CREATE TABLE `subcontracting` (
  `Id_Subcontracting` int NOT NULL,
  `Start_date_Soperation` date DEFAULT NULL,
  `Finish_date_Soperation` date DEFAULT NULL,
  `Id_managers` int NOT NULL,
  `Self_esteem` double DEFAULT NULL,
  `Estimated_amount` double DEFAULT NULL,
  `Amount contractor` int DEFAULT NULL,
  `amount_contractor_date` date DEFAULT NULL,
  `account_number` int NOT NULL,
  `financial_cell_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subcontracting`
--

INSERT INTO `subcontracting` (`Id_Subcontracting`, `Start_date_Soperation`, `Finish_date_Soperation`, `Id_managers`, `Self_esteem`, `Estimated_amount`, `Amount contractor`, `amount_contractor_date`, `account_number`, `financial_cell_id`) VALUES
(1, '2022-06-15', '2022-06-16', 1, 150000, 160000, 160000, '2022-06-15', 223, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tex_process`
--

CREATE TABLE `tex_process` (
  `Id_Tex_Process` int NOT NULL,
  `Name_Tex_Process` varchar(255) DEFAULT NULL,
  `Id_1060_Parameter` int NOT NULL,
  `Id_printed_sheets` int NOT NULL,
  `id_operation_1060` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `сost_sheet`
--

CREATE TABLE `сost_sheet` (
  `Id_Cost_sheet` int NOT NULL,
  `Id_paper` int NOT NULL,
  `Cost_of_sheet` int DEFAULT NULL,
  `Recording_date_Sheet` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `1060_parameter`
--
ALTER TABLE `1060_parameter`
  ADD PRIMARY KEY (`Id_1060_Parameter`);

--
-- Индексы таблицы `access_rights`
--
ALTER TABLE `access_rights`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `accounting_of_printed_sheets`
--
ALTER TABLE `accounting_of_printed_sheets`
  ADD PRIMARY KEY (`Id_printed_sheets`);

--
-- Индексы таблицы `calculation_paid`
--
ALTER TABLE `calculation_paid`
  ADD PRIMARY KEY (`Id_сalculation_paid`),
  ADD KEY `financial_cell_id` (`financial_cell_id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_Client`),
  ADD KEY `Id_Discount` (`Id_Discount`);

--
-- Индексы таблицы `design_operation`
--
ALTER TABLE `design_operation`
  ADD PRIMARY KEY (`Id_design_operation`);

--
-- Индексы таблицы `discound`
--
ALTER TABLE `discound`
  ADD PRIMARY KEY (`IdDiscound`);

--
-- Индексы таблицы `financial_cell`
--
ALTER TABLE `financial_cell`
  ADD PRIMARY KEY (`financial_cell_id`);

--
-- Индексы таблицы `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`Id_managers`),
  ADD KEY `id_access` (`id_access`);

--
-- Индексы таблицы `name_price_range`
--
ALTER TABLE `name_price_range`
  ADD PRIMARY KEY (`Id_Name_Price_range`),
  ADD UNIQUE KEY `Id_Name_Price_range` (`Id_Name_Price_range`),
  ADD KEY `Id_Name_Price_range_2` (`Id_Name_Price_range`);

--
-- Индексы таблицы `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`Id_operation`),
  ADD KEY `Id_Orders` (`Id_Orders`),
  ADD KEY `Id_Subcontracting` (`Id_Subcontracting`),
  ADD KEY `Id_Tex_Process` (`Id_Tex_Process`);

--
-- Индексы таблицы `operation_1060`
--
ALTER TABLE `operation_1060`
  ADD PRIMARY KEY (`id_operation_1060`),
  ADD KEY `Id_Cost_sheet` (`Id_Cost_sheet`);

--
-- Индексы таблицы `orders_args`
--
ALTER TABLE `orders_args`
  ADD PRIMARY KEY (`Id_Orders`),
  ADD KEY `Id_сalculation_paid` (`Id_сalculation_paid`),
  ADD KEY `Id_Order_status` (`Id_Order_status`),
  ADD KEY `Id_managers` (`Id_managers`),
  ADD KEY `Id_Client` (`Id_Client`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`Id_Order_status`);

--
-- Индексы таблицы `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`Id_paper`),
  ADD UNIQUE KEY `Id_paper` (`Id_paper`),
  ADD KEY `Id_paper_type` (`Id_paper_type`),
  ADD KEY `Id_Price_range` (`Id_Price_range`);

--
-- Индексы таблицы `paper_type`
--
ALTER TABLE `paper_type`
  ADD PRIMARY KEY (`Id_paper_type`),
  ADD UNIQUE KEY `Id_paper_type` (`Id_paper_type`),
  ADD KEY `Id_paper_type_2` (`Id_paper_type`);

--
-- Индексы таблицы `price_range`
--
ALTER TABLE `price_range`
  ADD PRIMARY KEY (`Id_Price_range`),
  ADD UNIQUE KEY `ID_Name_Price_range` (`ID_Name_Price_range`),
  ADD KEY `ID_Name_Price_range_2` (`ID_Name_Price_range`);

--
-- Индексы таблицы `subcontracting`
--
ALTER TABLE `subcontracting`
  ADD PRIMARY KEY (`Id_Subcontracting`),
  ADD KEY `financial_cell_id` (`financial_cell_id`);

--
-- Индексы таблицы `tex_process`
--
ALTER TABLE `tex_process`
  ADD PRIMARY KEY (`Id_Tex_Process`),
  ADD KEY `id_operation_1060` (`id_operation_1060`),
  ADD KEY `Id_printed_sheets` (`Id_printed_sheets`),
  ADD KEY `Id_1060_Parameter` (`Id_1060_Parameter`);

--
-- Индексы таблицы `сost_sheet`
--
ALTER TABLE `сost_sheet`
  ADD PRIMARY KEY (`Id_Cost_sheet`),
  ADD KEY `Id_paper` (`Id_paper`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `1060_parameter`
--
ALTER TABLE `1060_parameter`
  MODIFY `Id_1060_Parameter` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `access_rights`
--
ALTER TABLE `access_rights`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `accounting_of_printed_sheets`
--
ALTER TABLE `accounting_of_printed_sheets`
  MODIFY `Id_printed_sheets` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `calculation_paid`
--
ALTER TABLE `calculation_paid`
  MODIFY `Id_сalculation_paid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `Id_Client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `design_operation`
--
ALTER TABLE `design_operation`
  MODIFY `Id_design_operation` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `discound`
--
ALTER TABLE `discound`
  MODIFY `IdDiscound` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `financial_cell`
--
ALTER TABLE `financial_cell`
  MODIFY `financial_cell_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `managers`
--
ALTER TABLE `managers`
  MODIFY `Id_managers` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `name_price_range`
--
ALTER TABLE `name_price_range`
  MODIFY `Id_Name_Price_range` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `operations`
--
ALTER TABLE `operations`
  MODIFY `Id_operation` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `operation_1060`
--
ALTER TABLE `operation_1060`
  MODIFY `id_operation_1060` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders_args`
--
ALTER TABLE `orders_args`
  MODIFY `Id_Orders` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `Id_Order_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `paper`
--
ALTER TABLE `paper`
  MODIFY `Id_paper` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `paper_type`
--
ALTER TABLE `paper_type`
  MODIFY `Id_paper_type` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `price_range`
--
ALTER TABLE `price_range`
  MODIFY `Id_Price_range` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subcontracting`
--
ALTER TABLE `subcontracting`
  MODIFY `Id_Subcontracting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tex_process`
--
ALTER TABLE `tex_process`
  MODIFY `Id_Tex_Process` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `сost_sheet`
--
ALTER TABLE `сost_sheet`
  MODIFY `Id_Cost_sheet` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `calculation_paid`
--
ALTER TABLE `calculation_paid`
  ADD CONSTRAINT `calculation_paid_ibfk_1` FOREIGN KEY (`financial_cell_id`) REFERENCES `financial_cell` (`financial_cell_id`);

--
-- Ограничения внешнего ключа таблицы `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Id_Discount`) REFERENCES `discound` (`IdDiscound`);

--
-- Ограничения внешнего ключа таблицы `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`id_access`) REFERENCES `access_rights` (`Id`);

--
-- Ограничения внешнего ключа таблицы `operations`
--
ALTER TABLE `operations`
  ADD CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`Id_Orders`) REFERENCES `orders_args` (`Id_Orders`),
  ADD CONSTRAINT `operations_ibfk_2` FOREIGN KEY (`Id_Subcontracting`) REFERENCES `subcontracting` (`Id_Subcontracting`),
  ADD CONSTRAINT `operations_ibfk_3` FOREIGN KEY (`Id_Tex_Process`) REFERENCES `tex_process` (`Id_Tex_Process`);

--
-- Ограничения внешнего ключа таблицы `operation_1060`
--
ALTER TABLE `operation_1060`
  ADD CONSTRAINT `operation_1060_ibfk_1` FOREIGN KEY (`Id_Cost_sheet`) REFERENCES `сost_sheet` (`Id_Cost_sheet`);

--
-- Ограничения внешнего ключа таблицы `orders_args`
--
ALTER TABLE `orders_args`
  ADD CONSTRAINT `orders_args_ibfk_1` FOREIGN KEY (`Id_Order_status`) REFERENCES `order_status` (`Id_Order_status`),
  ADD CONSTRAINT `orders_args_ibfk_2` FOREIGN KEY (`Id_managers`) REFERENCES `managers` (`Id_managers`),
  ADD CONSTRAINT `orders_args_ibfk_3` FOREIGN KEY (`Id_сalculation_paid`) REFERENCES `calculation_paid` (`Id_сalculation_paid`),
  ADD CONSTRAINT `orders_args_ibfk_4` FOREIGN KEY (`Id_Client`) REFERENCES `client` (`Id_Client`);

--
-- Ограничения внешнего ключа таблицы `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `paper_ibfk_1` FOREIGN KEY (`Id_paper_type`) REFERENCES `paper_type` (`Id_paper_type`),
  ADD CONSTRAINT `paper_ibfk_2` FOREIGN KEY (`Id_Price_range`) REFERENCES `price_range` (`Id_Price_range`);

--
-- Ограничения внешнего ключа таблицы `price_range`
--
ALTER TABLE `price_range`
  ADD CONSTRAINT `price_range_ibfk_1` FOREIGN KEY (`ID_Name_Price_range`) REFERENCES `name_price_range` (`Id_Name_Price_range`);

--
-- Ограничения внешнего ключа таблицы `subcontracting`
--
ALTER TABLE `subcontracting`
  ADD CONSTRAINT `subcontracting_ibfk_1` FOREIGN KEY (`financial_cell_id`) REFERENCES `financial_cell` (`financial_cell_id`);

--
-- Ограничения внешнего ключа таблицы `tex_process`
--
ALTER TABLE `tex_process`
  ADD CONSTRAINT `tex_process_ibfk_1` FOREIGN KEY (`id_operation_1060`) REFERENCES `operation_1060` (`id_operation_1060`),
  ADD CONSTRAINT `tex_process_ibfk_2` FOREIGN KEY (`Id_printed_sheets`) REFERENCES `accounting_of_printed_sheets` (`Id_printed_sheets`),
  ADD CONSTRAINT `tex_process_ibfk_3` FOREIGN KEY (`Id_1060_Parameter`) REFERENCES `1060_parameter` (`Id_1060_Parameter`);

--
-- Ограничения внешнего ключа таблицы `сost_sheet`
--
ALTER TABLE `сost_sheet`
  ADD CONSTRAINT `сost_sheet_ibfk_1` FOREIGN KEY (`Id_paper`) REFERENCES `paper` (`Id_paper`);
--
-- База данных: `global`
--
CREATE DATABASE IF NOT EXISTS `global` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `global`;

-- --------------------------------------------------------

--
-- Структура таблицы `access`
--

CREATE TABLE `access` (
  `id` int NOT NULL,
  `name` varchar(24) NOT NULL,
  `access_num` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `access`
--

INSERT INTO `access` (`id`, `name`, `access_num`) VALUES
(1, 'Администратор', 1),
(2, 'Директор', 1),
(3, 'Начальник производства', 1),
(4, 'Начальник цифры', 1),
(5, 'Начальник широкоформатки', 1),
(6, 'Начальник книжного цеха', 1),
(7, 'Бухгалтер', 1),
(8, 'Руководитель маркетинга', 1),
(9, 'Менеджер', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `clients_table`
--

CREATE TABLE `clients_table` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `k_press` int NOT NULL,
  `k_papers` int NOT NULL,
  `limit_oplata` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `clients_table`
--

INSERT INTO `clients_table` (`id`, `name`, `login`, `password`, `k_press`, `k_papers`, `limit_oplata`) VALUES
(1, 'Артифакт', 'Artyfakt', '1234567', 35, 20, 10000000),
(2, 'Карти', 'karti', '12345', 30, 15, 100000),
(3, 'Промполиграф', 'ppgraf', 'ppg', 28, 12, 100000),
(4, 'Внешние', 'people', '123', 0, 0, 0),
(5, 'L-Project', 'lpoject', 'lpoject123', 20, 10, 100000),
(6, 'Журнал Сезон', 'sezon', 'sezon123', 30, 15, 100000),
(7, 'Акварель', 'aqua', 'aqua123', 30, 15, 100000),
(8, 'Батьков Игорь', 'batkov.i.igor@gmail.com', 'arttech', 32, 15, 100000);

-- --------------------------------------------------------

--
-- Структура таблицы `fin_account`
--

CREATE TABLE `fin_account` (
  `id` int NOT NULL COMMENT 'Индекс финансовых ячеек',
  `name` varchar(64) NOT NULL COMMENT 'Наименование ячейки',
  `bank_account_rs` int NOT NULL COMMENT 'Номер р/с',
  `bank_account_bik` int NOT NULL COMMENT 'БИК',
  `bank_account_ks` int NOT NULL COMMENT 'Номер к/с',
  `top` int NOT NULL DEFAULT '1' COMMENT 'Используемый = 1\r\nНеиспользуемый = 0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `fin_account`
--

INSERT INTO `fin_account` (`id`, `name`, `bank_account_rs`, `bank_account_bik`, `bank_account_ks`, `top`) VALUES
(1, 'Cash', 0, 0, 0, 1),
(2, 'АФ банк Открытие', 0, 0, 0, 1),
(3, 'АФ банк Сбербанк', 0, 0, 0, 0),
(4, 'ИП банк Точка', 0, 0, 0, 1),
(5, 'ЛМ банк Точка', 0, 0, 0, 1),
(6, 'ЛМ банк Сбербанк', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `managers_table`
--

CREATE TABLE `managers_table` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Имя менеджера/сотрудника',
  `login` varchar(64) NOT NULL COMMENT 'Логин',
  `password` varchar(64) NOT NULL COMMENT 'Пароль',
  `email` varchar(64) NOT NULL COMMENT 'E-mail',
  `tel` varchar(16) NOT NULL COMMENT 'Телефон',
  `dostup_id` int NOT NULL COMMENT 'Права доступа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `managers_table`
--

INSERT INTO `managers_table` (`id`, `name`, `login`, `password`, `email`, `tel`, `dostup_id`) VALUES
(1, 'Виталий Ольшевский', '', '', '', '', 0),
(2, 'Андрей Гречиха', '', '', '', '', 0),
(3, 'Ирина Бабаева', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `papers`
--

CREATE TABLE `papers` (
  `id` int NOT NULL COMMENT 'идентификатор в таблице',
  `name` varchar(60) NOT NULL COMMENT 'наименование бумаги',
  `type` varchar(30) NOT NULL COMMENT 'тип бумаги',
  `x_size` int NOT NULL COMMENT 'ширина листа, мм',
  `y_size` int NOT NULL COMMENT 'высота листа, мм',
  `weight` int NOT NULL COMMENT 'плотность, г/кв.м',
  `thickness` int NOT NULL COMMENT 'толщина листа, мкн',
  `price_sheet` decimal(8,4) NOT NULL COMMENT 'Стоимость листа',
  `price_range` varchar(30) NOT NULL COMMENT 'ценовой диапазон',
  `k_up_paper` decimal(5,2) NOT NULL DEFAULT '1.25' COMMENT 'коэффициент накрутки на бумагу',
  `one-side` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1-сторонняя (true), 2-стороняя (false)',
  `roll` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Рулонная (true), листовая (false)',
  `const` int NOT NULL DEFAULT '1' COMMENT 'Постоянная (1), временная (2), удалённая (0)',
  `tex_process_var` int NOT NULL COMMENT 'Техпроцессы использования (бинарный шаблон)',
  `amount` int NOT NULL COMMENT 'Текущий остаток листов (для листовых) или м (для рулонных)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `papers`
--

INSERT INTO `papers` (`id`, `name`, `type`, `x_size`, `y_size`, `weight`, `thickness`, `price_sheet`, `price_range`, `k_up_paper`, `one-side`, `roll`, `const`, `tex_process_var`, `amount`) VALUES
(3, 'Офсетная, 80 (320х450)', 'Офсетная', 320, 450, 80, 0, '0.9000', 'Офсетная', '1.25', 0, 0, 1, 0, 0),
(4, 'Офсетная, 120 (320х450)', 'Офсетная', 320, 450, 120, 0, '1.3500', 'Офсетная', '1.25', 0, 0, 1, 0, 0),
(5, 'Офсетная, 160 (320х450)', 'Офсетная', 320, 450, 160, 0, '1.8000', 'Офсетная', '1.25', 0, 0, 1, 0, 0),
(6, 'Мелованная, 115 (320х450)', 'Мелованная', 320, 450, 115, 0, '1.5100', 'Мелованная 200 и ниже', '1.25', 0, 0, 1, 0, 0),
(7, 'Мелованная, 130 (320х450)', 'Мелованная', 320, 450, 130, 0, '1.7050', 'Мелованная 200 и ниже', '1.25', 0, 0, 1, 0, 0),
(8, 'Мелованная, 150 (320х450)', 'Мелованная', 320, 450, 150, 0, '1.9673', 'Мелованная 200 и ниже', '1.25', 0, 0, 1, 0, 0),
(9, 'Мелованная, 170 (320х450)', 'Мелованная', 320, 450, 170, 0, '2.2300', 'Мелованная 200 и ниже', '1.25', 0, 0, 1, 0, 0),
(10, 'Мелованная, 200 (320х450)', 'Мелованная', 320, 450, 200, 0, '2.6231', 'Мелованная 200 и ниже', '1.25', 0, 0, 1, 0, 0),
(11, 'Мелованная, 250 (320х450)', 'Мелованная', 320, 450, 250, 0, '3.3475', 'Мелованная 250 и выше', '1.25', 0, 0, 1, 0, 0),
(12, 'Мелованная, 300 (320х450)', 'Мелованная', 320, 450, 300, 300, '4.2954', 'Мелованная 250 и выше', '1.25', 0, 0, 1, 0, 0),
(13, 'Мелованная, 350 (330х485)', 'Мелованная', 330, 485, 350, 0, '6.0810', 'Мелованная 250 и выше', '1.25', 0, 0, 1, 0, 0),
(14, 'Самоклейка, 195 (305х430)', 'Самоклейка', 305, 430, 195, 0, '8.6500', 'Самоклейка', '1.25', 0, 0, 1, 0, 0),
(15, 'Самоклейка, 195 (330х485)', 'Самоклейка', 330, 485, 195, 0, '11.5000', 'Самоклейка', '1.25', 0, 0, 1, 0, 0),
(16, 'Prestige Лён, 300 (330х485)', 'Дизайнерская', 330, 485, 350, 0, '33.7500', '', '1.25', 0, 0, 1, 0, 0),
(17, 'Galaxy metalic IceWhite, 300 (330х485)', 'Дизайнерская', 330, 485, 300, 0, '40.0000', '', '1.25', 0, 0, 1, 0, 0),
(18, 'SirioPearl IceWhite, 125 (330х485)', 'Дизайнерская', 330, 485, 125, 0, '25.0000', '', '1.25', 0, 0, 1, 0, 0),
(19, 'SirioPearl IceWhite, 300 (330х485)', 'Дизайнерская', 330, 485, 300, 0, '58.2500', '', '1.25', 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `papers_range`
--

CREATE TABLE `papers_range` (
  `id` int NOT NULL COMMENT 'id Ценового типа бумаги',
  `name` varchar(64) NOT NULL COMMENT 'Имя ценового типа бумаги',
  `cost` decimal(10,0) NOT NULL COMMENT 'Стоимость за кг'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL COMMENT 'id статуса заказа',
  `name` varchar(24) NOT NULL COMMENT 'Имя статуса заказа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'STOP'),
(2, 'Count'),
(3, 'Design'),
(4, 'PrePress'),
(5, 'Press'),
(6, 'PostPress'),
(7, 'Pack'),
(8, 'Delivery'),
(9, 'Comlpete!');

-- --------------------------------------------------------

--
-- Структура таблицы `sub`
--

CREATE TABLE `sub` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sub`
--

INSERT INTO `sub` (`id`, `name`) VALUES
(1, 'Гречиха'),
(2, 'Карти'),
(3, 'Астерия');

-- --------------------------------------------------------

--
-- Структура таблицы `tex_process`
--

CREATE TABLE `tex_process` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tex_process`
--

INSERT INTO `tex_process` (`id`, `name`) VALUES
(1, '1060'),
(2, '3080Long'),
(3, 'KM951-A3'),
(4, 'KM951-A4'),
(5, 'Mimaki'),
(6, 'Summa'),
(7, 'Сборка'),
(8, 'Гречиха');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz_table`
--

CREATE TABLE `zakaz_table` (
  `id` int NOT NULL COMMENT 'Индекс заказов общий',
  `tip_zakaz` int NOT NULL COMMENT '0 - фин.операция\r\n1 - расчёт\r\n2 - в работе\r\n3 - выполнен\r\n4 - ожидание\r\n5 - отмена',
  `data_count_my` datetime NOT NULL COMMENT 'Дата и время расчёта',
  `data_ispolnen` datetime NOT NULL COMMENT 'Дата и время исполнения',
  `id2` int NOT NULL COMMENT 'Индекс внутри заказа',
  `client_id` int NOT NULL COMMENT 'Имя клиента',
  `manager_id` int NOT NULL COMMENT 'Менеджер',
  `zakaz_name` varchar(128) NOT NULL COMMENT 'Наименование заказа',
  `texprocess_main` int NOT NULL COMMENT 'Техпроцесс главный',
  `texprocess_step` varchar(11) NOT NULL COMMENT 'Техпроцесс операция',
  `x_size` int NOT NULL COMMENT 'Х-размер изделия',
  `y_size` int NOT NULL COMMENT 'Y-размер изделия',
  `n_list_tirag` int NOT NULL COMMENT 'Кол-во листов тиража расчётное',
  `n_list_priladka` int NOT NULL COMMENT 'Кол-во листов приладки расчётное',
  `n_list_tirag_fakt` int NOT NULL COMMENT 'Кол-во листов тиража фактическое',
  `n_list_priladka_fakt` int NOT NULL COMMENT 'Кол-во листов приладки фактическое',
  `color` varchar(3) NOT NULL COMMENT 'Цветность',
  `paper_id` int NOT NULL COMMENT 'Материал',
  `c_prn_final` decimal(10,2) NOT NULL COMMENT 'Сумма печати расчётная',
  `c_paper_final` decimal(10,2) NOT NULL COMMENT 'Сумма бумаги расчётная',
  `c_rez_final` decimal(10,2) NOT NULL COMMENT 'Сумма реза расчётная',
  `c_price_final` decimal(10,2) NOT NULL COMMENT 'Сумма финальная расчётная',
  `c_price_client` decimal(10,2) NOT NULL COMMENT 'Сумма озвученная клиенту',
  `num_score` varchar(20) NOT NULL COMMENT 'Номер счёта клиента',
  `date_score` date NOT NULL COMMENT 'Дата счёта клиента',
  `date_payment` date NOT NULL COMMENT 'Дата оплаты клиентом',
  `fin_id_payment` int NOT NULL COMMENT 'Имя кассы прихода',
  `sum_payment` decimal(10,2) NOT NULL COMMENT 'Сумма оплаты клиентом',
  `data_count_sub` date NOT NULL COMMENT 'Дата расчёта субподрядчика',
  `sum_count_sub` decimal(10,2) NOT NULL COMMENT 'Сумма озвученная субподрядчиком',
  `sub_id` int NOT NULL COMMENT 'Имя субподрядчика',
  `data_rashod_sub` date NOT NULL COMMENT 'Дата оплаты субподрядчику',
  `sum_rashod_sub` decimal(10,2) NOT NULL COMMENT 'Сумма оплаты субподрядчику',
  `num_score_sub` varchar(20) NOT NULL COMMENT 'Номер счёта субподрядчика',
  `fin_id_rashod` int NOT NULL COMMENT 'Имя кассы расхода'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz_table2`
--

CREATE TABLE `zakaz_table2` (
  `id` int NOT NULL COMMENT 'Индекс заказов общий',
  `data_count_my` datetime NOT NULL COMMENT 'Дата и время расчёта',
  `status_id` int NOT NULL COMMENT 'Текущий статус заказа',
  `manager_id` int NOT NULL COMMENT 'Имя менеджера',
  `client_id` int NOT NULL COMMENT 'Имя клиента',
  `zakaz_name` varchar(128) NOT NULL COMMENT 'Наименование заказа',
  `zakaz_comment` varchar(256) NOT NULL COMMENT 'Комментарии к заказу',
  `zakaz_path` varchar(128) DEFAULT NULL COMMENT 'Путь к файлам',
  `c_price_count` decimal(10,2) NOT NULL COMMENT 'Сумма расчётная',
  `c_price_voice` decimal(10,2) NOT NULL COMMENT 'Сумма озвученная',
  `date_price` date NOT NULL COMMENT 'Дата счета',
  `number_price` varchar(10) NOT NULL COMMENT 'Номер счета',
  `sum_oplaty` decimal(10,2) NOT NULL COMMENT 'Сумма счета',
  `fin_account_id` int NOT NULL COMMENT 'Финансовая ячейка',
  `margin_money` decimal(10,2) NOT NULL COMMENT 'Маржа заказа, руб.',
  `margin_percent` decimal(5,2) NOT NULL COMMENT 'Маржа заказа, %',
  `finoper` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Флажок финоперации'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients_table`
--
ALTER TABLE `clients_table`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Индексы таблицы `fin_account`
--
ALTER TABLE `fin_account`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `managers_table`
--
ALTER TABLE `managers_table`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `papers_range`
--
ALTER TABLE `papers_range`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tex_process`
--
ALTER TABLE `tex_process`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz_table`
--
ALTER TABLE `zakaz_table`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz_table2`
--
ALTER TABLE `zakaz_table2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access`
--
ALTER TABLE `access`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `clients_table`
--
ALTER TABLE `clients_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `fin_account`
--
ALTER TABLE `fin_account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Индекс финансовых ячеек', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `managers_table`
--
ALTER TABLE `managers_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'идентификатор в таблице', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `papers_range`
--
ALTER TABLE `papers_range`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id Ценового типа бумаги';

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'id статуса заказа', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tex_process`
--
ALTER TABLE `tex_process`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `zakaz_table`
--
ALTER TABLE `zakaz_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Индекс заказов общий';

--
-- AUTO_INCREMENT для таблицы `zakaz_table2`
--
ALTER TABLE `zakaz_table2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'Индекс заказов общий', AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zakaz_table2`
--
ALTER TABLE `zakaz_table2`
  ADD CONSTRAINT `zakaz_table2_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
