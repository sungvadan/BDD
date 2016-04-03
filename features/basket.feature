@core
Feature: basket
  permet de vérifier le panier foctionne

  Scenario: An empty basket
    Given An empty basket
    Then The basket price is 0 $


  Scenario: Multiple products are added to the basket
    Given An empty basket
    And A product costing 5 $ is added to the basket
    And A product costing 15 $ is added to the basket
    Then The basket price is 20 $
